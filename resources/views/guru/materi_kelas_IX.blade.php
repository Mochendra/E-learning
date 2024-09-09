<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('illustrations/logo.png') }}" alt="Logo" class="img-fluid" style="width: 40px; height: 45px; margin-right: 10px;">
            </a>
            <a class="navbar-brand text-white" href="#">Dashboard Guru</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="judul_dashboard text-center">Materi Kelas IX</h2>
        <table class="table table-bordered">
            <thead>
                <tr class="Huruf_Angka">
                    <th scope="col">Minggu ke</th>
                    <th scope="col">Materi/Tugas/Quiz</th>
                    <th scope="col">Hasil Tugas</th>
                    <th scope="col">Hasil Quiz</th>
                </tr>
            </thead>
            <tbody class="Huruf_Angka_Kedua">
                <tr>
                    <th scope="row">Minggu 1</th>
                    <td>
                        <div style="display: flex; width:100%; flex-direction:row; gap: 4px; "> 
                        <a href="/materi_kelas_VII_materi" class="btn btn-danger btn-sm w-100">Tambah Materi</a>
                        <a href="/materi_kelas_VII_pengumpulan" class="btn btn-danger btn-sm w-100">Tambah Pengumpulan</a>
                        <a href="/materi_kelas_VII_quiz" class="btn btn-danger btn-sm w-100">Tambah Quiz</a>
                    </div>
                    <td>
                        <a href="/hasil_tugas_kelas_VII" class="btn btn-warning btn-sm w-100">Lihat</a>
                    </td>
                    <td>
                        <a href="/hasil_quiz_kelas_VII" class="btn btn-success btn-sm w-100">Lihat</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Minggu 2</th>
                    <td>
                        <div style="display: flex; width:100%; flex-direction:row; gap: 4px; "> 
                        <a href="/materi_kelas_VII_materi" class="btn btn-danger btn-sm w-100">Tambah Materi</a>
                        <a href="/materi_kelas_VII_pengumpulan" class="btn btn-danger btn-sm w-100">Tambah Pengumpulan</a>
                        <a href="/materi_kelas_VII_quiz" class="btn btn-danger btn-sm w-100">Tambah Quiz</a>
                    </div>
                    <td>
                        <a href="/hasil_tugas_kelas_VII" class="btn btn-warning btn-sm w-100">Lihat</a>
                    </td>
                    <td>
                        <a href="/hasil_quiz_kelas_VII" class="btn btn-success btn-sm w-100">Lihat</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Minggu 3</th>
                    <td>
                        <div style="display: flex; width:100%; flex-direction:row; gap: 4px; "> 
                        <a href="/materi_kelas_VII_materi" class="btn btn-danger btn-sm w-100">Tambah Materi</a>
                        <a href="/materi_kelas_VII_pengumpulan" class="btn btn-danger btn-sm w-100">Tambah Pengumpulan</a>
                        <a href="/materi_kelas_VII_quiz" class="btn btn-danger btn-sm w-100">Tambah Quiz</a>
                    </div>
                    <td>
                        <a href="/hasil_tugas_kelas_VII" class="btn btn-warning btn-sm w-100">Lihat</a>
                    </td>
                    <td>
                        <a href="/hasil_quiz_kelas_VII" class="btn btn-success btn-sm w-100">Lihat</a>
                    </td>
                </tr>
            </tbody>
            
        </table>
    </div>
</body>

</html>
{{-- ctrl + shift + k --}}
{{-- shift + alt + panah bawah --}}