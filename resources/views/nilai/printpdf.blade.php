<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 95%;
            margin: 20px auto;
            overflow: hidden;
        }
        .header, .info, .footer {
            margin-bottom: 20px;
        }
        .logo {
            float: left;
            width: 10%;
            margin-right: 20px;
            text-align: center;
        }
        .title {
            float: left;
            width: 85%;
            text-align: center;
        }
        .title h1, .title h2, .title h3 {
            margin: 0;
            padding: 0;
        }
        .title h1 {
            margin-bottom: 5px;
            font-size: 23px;
        }
        .title h2 {
            margin-bottom: 5px;
            font-size: 18px;
        }
        .title p {
            margin: 0;
            font-size: 14px;
        }
        .clearfix {
            clear: both;
        }
        .info {
            text-align: left;
        }
        .info ul {
            list-style-type: none;
            padding: 0;
        }
        .info li {
            margin-bottom: 10px;
            font-size: 16px; /* Increased font size */
        }
        .divider {
            border-top: 2px solid #000;
            margin: 20px 0;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 10px auto;
        }
        th, td {
            text-align: center;
            padding: 12px;
            width: 50%;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-size: 16px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        p.round {
            border: 1px solid black;
            border-radius: 12px;
            padding: 12px;
            width: 50%;
            margin: 0 auto;
            background-color: #f2f2f2;
            font-size: 16px;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
        }
        .centered {
            text-align: center;
        }
    </style>
</head>

<body>
<div class="container header">
    <div class="logo">
        <img src="{{public_path('assets/images/ISO_Jepang.png')}}" width="100%" alt="">
    </div>
    <div class="title">
        <h1>PUSAT STANDARDISASI PELATIHAN ISO JEPANG</h1>
        <p>Jl. Pedurenan Depok No. 7A, Cisalak, Kec. Cimanggis, Kota Depok, Jawa Barat 16452</p>
        <p>Website: isojepang.com, e-mail: isojepang@gmail.com</p>
    </div>
    <div class="clearfix"></div>
</div>

<div class="divider"></div>
<div class="centered">
    <h2>HASIL TES MBTI PESERTA</h2>
</div>
<div class="container info">
    <ul>
        <li><strong>No. Registrasi:</strong> {{$data->no_reg}}</li>
        <li><strong>Email:</strong> {{$data->email}}</li>
        <li><strong>Nama:</strong> {{$data->nama}}</li>
    </ul>
</div>

<!-- Dimensi 1 -->
<div class="container">
    <table>
        <tr>
            <th>INTROVERT (I)</th>
            <th>EKSTROVERT (E)</th>
        </tr>
        <tr>
            <td>{{round($data->average_score_i*100)}}%</td>
            <td>{{round($data->average_score_e*100)}}%</td>
        </tr>
    </table>
</div>

<!-- Dimensi 2 -->
<div class="container">
    <table>
        <tr>
            <th>SENSING (S)</th>
            <th>INTUITION (N)</th>
        </tr>
        <tr>
            <td>{{round($data->average_score_s*100)}}%</td>
            <td>{{round($data->average_score_n*100)}}%</td>
        </tr>
    </table>
</div>

<!-- Dimensi 3 -->
<div class="container">
    <table>
        <tr>
            <th>THINKING (T)</th>
            <th>FEELING (F)</th>
        </tr>
        <tr>
            <td>{{round($data->average_score_t*100)}}%</td>
            <td>{{round($data->average_score_f*100)}}%</td>
        </tr>
    </table>
</div>

<!-- Dimensi 4 -->
<div class="container">
    <table>
        <tr>
            <th>JUDGING (J)</th>
            <th>PERCEIVING (P)</th>
        </tr>
        <tr>
            <td>{{round($data->average_score_j*100)}}%</td>
            <td>{{round($data->average_score_p*100)}}%</td>
        </tr>
    </table>
</div>

<center><p class="round">Tipe Kepribadian Anda: {{$data->result_1}}{{$data->result_2}}{{$data->result_3}}{{$data->result_4}}</p></center>
</body>
</html>
