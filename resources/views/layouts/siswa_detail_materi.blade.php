<!-- layouts/detail_materi.blade.php -->
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Russo+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
.video-responsive {
    position: relative;
    width: 100%; /* Default width for mobile */
    padding-bottom: 42.86%; /* Adjusted for a 21:9 Aspect Ratio */
    height: 0; /* Set height to 0 */
    overflow: hidden;
    margin: 1rem 0; /* Add margin for spacing */
}

/* Media query for desktop */
@media (min-width: 768px) {
    .video-responsive {
        width: 90%; /* Set width to 90% for desktop */
        max-width: 1200px; /* Increase maximum width to allow for a wider display */
        margin: 0 auto; /* Center the video on the page */
    }
}

.video-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%; /* Fill the container width */
    height: 100%; /* Fill the container height */
}

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('illustrations/logo.png') }}" alt="Logo"
                    style="width: 40px; height: 45px; margin-right: 10px;">
            </a>
            <a class="navbar-brand text-white" href="#">Halaman Materi</a>
        </div>
    </nav>
    <div class="container">
        <div class="card-group siswa-detail">
            <div class="card siswa-detail-detail">
                <div class="card-body siswa-detail-detail">
                    <h5 class="card-title">@yield('materi-title')</h5>
                    <p class="card-text">@yield('materi-content')</p>
                </div>
                <div class="mb-3">
                    <h6>Gambar:</h6>
                    <img src="@yield('materi-gambar')" class="img-fluid mb-3" alt="Gambar Materi">
                </div>
                <h6>Video YouTube:</h6>
                <div class="mb-3 video-responsive">
                        <iframe id="youtubeVideo" src="@yield('materi-video')" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
