<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIII</title>
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
        <h2 class="judul_dashboard text-center">Hasil Tugas Kelas VIII</h2>
        <table class="table table-bordered">
            <thead>
                <tr class="hasil_tugas">
                    <th scope="col">No Absen</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama tugas</th>
                    <th scope="col">File Tugas</th>
                </tr>
            </thead>
            <tbody class="hasil_tugas_siswa">
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Siswa 1</td>
                    <td>Tugas 1</td>
                    <td><a href="path/to/file1.pdf" target="_blank" class="btn btn-info btn-sm w-100">Buka</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Nama Siswa 2</td>
                    <td>Tugas 2</td>
                    <td><a href="path/to/file2.jpg" target="_blank" class="btn btn-info btn-sm w-100">Buka</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
</body>

</html>
{{-- ctrl + shift + k --}}
{{-- shift + alt + panah bawah --}}