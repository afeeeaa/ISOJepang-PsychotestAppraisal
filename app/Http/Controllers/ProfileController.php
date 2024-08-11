<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Http\Controllers\Auth\PasswordController;

class ProfileController extends Controller
{
    // menampilkan form profil
    public function edit(Request $request): View
    {
        return view('profile.profil.edit-profil', [
            'user' => $request->user(),
        ]);
    }

    public function sandi(Request $request): View
    {
        return view('profile.sandi.sandi', [
            'user' => $request->user(),
        ]);
    }

    // update profil
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('username')) {
            $request->user()->email_verified_at = null; 
        }

        $request->user()->save();

        return Redirect::route('profile.profil.success')->with('status', 'profile-updated');
    }
    // menghapus akun
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function success(): View
    {
        return view('profile.profil.success');
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        // \Log::info('Request method:', ['method' => $request->method()]);
        
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        //Pengecekan kata sandi
        if (!Hash::check($request->current_password, $request->user()->password)) {
            return back()->withErrors(['current_password' => 'Kata Sandi Lama salah']);
        }

        // Update password
        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return Redirect::route('profile.sandi.success')->with('status', 'password-updated');
    }

    public function passwordSuccess(): View
    {
        return view('profile.sandi.success');
    }

}
