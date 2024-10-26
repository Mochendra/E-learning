<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .Background-koor {
            background-color: #f8f9fa;
            /* Warna latar belakang yang lembut */
        }

        .table-bordered th,
        .table-bordered td {
            border-color: #a3c1e0;
            /* Warna biru muda pastel */
        }
    </style>
</head>

<body class="Background-koor ">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('illustrations/logo.png') }}" alt="Logo"
                    style="width: 40px; height: 45px; margin-right: 10px;">
            </a>
            <a class="navbar-brand text-white" href="/dashboard_koorjadwal">Halaman Koordinator Jadwal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                            href="/koorjadwal_tambah_kelas">Tambah Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/koorjadwal_siswa">Tambah Kelas
                            Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                            href="/koorjadwal_tambah_mata_pelajaran">Tambah Mata Pelajaran Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                            href="/koorjadwal_tambah_tahun_ajar">Tambah Tahun Ajar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
