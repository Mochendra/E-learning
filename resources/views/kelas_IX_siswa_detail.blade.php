<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Siswa</title>
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
    <div class="container">
        <div class="card-group siswa-detail">
            <div class="card siswa-detail-detail">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body siswa-detail-detail">
                    <h5 class="card-title">Materi</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer siswa-detail-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
            <div class="card-group siswa-detail">
                <div class="card siswa-detail-detail">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body siswa-detail-detail">
                        <h5 class="card-title">Tugas</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>

                    <div class="mb-3" style="width: 100%">
                        <div style="padding-left: 15px; padding-right:15px;">
                            <label for="formFile" class="form-label card-title" style="font-size: 1.5rem">Pengumpulan tugas</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="button"
                                style="width: 100%; margin-top: 20px; margin-bottom:20px;">Button</button>
                        </div>
                    </div>
                        <div class="card-footer siswa-detail-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                </div>
            </div>
        </div>
</body>
