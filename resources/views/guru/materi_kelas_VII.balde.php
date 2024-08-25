<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom"> 
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('illustrations/logo.png') }}" alt="Logo" style="width: 40px; height: 45px; margin-right: 10px;">
          </a>
          <a class="navbar-brand text-white" href="#">Dashboard Guru</a> <!-- Menggunakan kelas text-white untuk teks putih -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
          </div>
        </div>
      </nav>
    <div class="container mt-5">
        <table class="table table-bordered">
            <p class="hari">MENGISI MATERI KELAS IX <A></A></p>
            <thead>
                <tr class="Huruf_Angka">
                    <th scope="col">Minggu ke</th>
                    <th scope="col">Materi</th>
                    <th scope="col">Buat Tugas</th>
                    <th scope="col">Hasil Tugas</th>
                    <th scope="col">Quiz</th>
                    <th scope="col">Hasil Quiz</th>
                </tr>
            </thead>
            <tbody class="Huruf_Angka_Kedua">
                <tr>
                    <th scope="row">Minggu 1</th>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm">Buat Materi</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm">Buat Tugas</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm">Lihat Hasil Materi</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">Buat Quiz</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">Lihat Hasil Quiz</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Minggu 2</th>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm">Buat Materi</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm">Buat Tugas</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm">Lihat Hasil Materi</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">Buat Quiz</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">Lihat Hasil Quiz</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Minggu 3</th>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm">Buat Materi</button>    
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm">Buat Tugas</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm">Lihat Hasil Materi</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">Buat Quiz</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">Lihat Hasil Quiz</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>