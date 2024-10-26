<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas Angkatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('illustrations/logo.png') }}" alt="Logo"
                    style="width: 40px; height: 45px; margin-right: 10px;">
            </a>
            <a class="navbar-brand text-white" href="#">Halaman Memilih Kelas</a>
            <!-- Menggunakan kelas text-white untuk teks putih -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="/kelas_VII" style="text-decoration: none; color: inherit;">
                    <div class="card text-center mb-3" style="height: 250px; cursor: pointer;">
                        <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                            <h5 class="card-title">Kelas VII</h5>
                            <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                                <span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/kelas_VIII" style="text-decoration: none; color: inherit;">
                    <div class="card text-center mb-3" style="height: 250px; cursor: pointer;">
                        <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                            <h5 class="card-title">Kelas VIII</h5>
                            <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                                <span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/kelas_IX" style="text-decoration: none; color: inherit;">
                    <div class="card text-center mb-3" style="height: 250px; cursor: pointer;">
                        <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                            <h5 class="card-title">Kelas IX</h5>
                            <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                                <span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
