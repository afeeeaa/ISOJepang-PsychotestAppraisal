<x-app-layout>
    <head>
        <title>{{ isset($webTitle) ? $webTitle . ' - ' : '' }}Dashboard</title>
    </head>

    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ $pageTitle ?? __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-20 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="mt-4 flex flex-col md:flex-row md:items-center">
            <div class="md:flex-1 md:pr-6 text-left">
            <img src="{{ asset('assets/images/Logo-ISO-JEPANG.png') }}" width="80%" alt="" class="mb-4 md:mb-0">
                <div class="text-gray-600 mb-4 text-justify">
                    ISO merupakan pusat standardisasi pelatihan Bahasa Jepang yang menyediakan kurikulum pembelajaran yang berfokus untuk persiapan kerja ke Jepang. Kami Bekerja sama dengan LPK/BLK yang berlokasi di berbagai wilayah di Indonesia sehingga ISO membuka peluang secara luas kepada masyarakat Indonesia yang memiliki keinginan untuk menguasai kemampuan dalam berbahasa Jepang dan berbagai Skill untuk persiapan bekerja ke Jepang.
                </div>
                <a href="https://isojepang.com/" target="_blank" rel="noopener noreferrer" class="inline-block px-4 py-2 text-white bg-blue-400 rounded-full hover:bg-blue-500">
                    LIHAT SELENGKAPNYA <svg class="w-4 h-4 inline-block ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H4a1 1 0 110-2h10.586L9.707 4.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="md:flex-1 flex justify-center items-right">
                <img src="{{ asset('assets/images/FotoBersamaISOJepang.jpg') }}" width="80%" alt="" class="mb-4 md:mb-0">
            </div>
        </div>
    </div>
</x-app-layout>
