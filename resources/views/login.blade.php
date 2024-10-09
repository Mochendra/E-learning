<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="Background-login">
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('illustrations/login.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Selamat datang</label>
                    <p class="italic-text">Isi untuk login.</p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <input type="text" name="nomor_induk" class="form-control" placeholder="Masukkan nomor induk" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan kata sandi" aria-label="Password" aria-describedby="basic-addon1" required>
                </div>
                <button type="submit" class="btn btn-success" style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: 5rem; --bs-btn-font-size: 1rem; margin-bottom:40px;">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>