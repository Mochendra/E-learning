<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas VII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Russo+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container" style="display: flex; flex-direction:row; margin-top:100px; margin-bottom:100px; gap:20px; flex-wrap:wrap; justify-content:center;">
        <a href="/kelas_VII_siswa_detail_materi" style="text-decoration: none; color: inherit;">
            <div class="card text-center mb-3" style="width: 18rem; height: 250px; cursor: pointer;">
                <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                    <h5 class="card-title">Materi</h5>
                    <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                        <span>Buka</span>
                    </div>
                </div>
            </div>
        </a>
        <a href="/kelas_VII_siswa_detail_tugas" style="text-decoration: none; color: inherit;">
            <div class="card text-center mb-3" style="width: 18rem; height: 250px; cursor: pointer;">
                <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                    <h5 class="card-title">Tugas</h5>
                    <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                        <span>Buka</span>
                    </div>
                </div>
            </div>
        </a>
        <a href="/kelas_VII_siswa_detail_quiz" style="text-decoration: none; color: inherit;">
            <div class="card text-center mb-3" style="width: 18rem; height: 250px; cursor: pointer;">
                <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                    <h5 class="card-title">Quiz</h5>
                    <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                        <span>Buka</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</body>