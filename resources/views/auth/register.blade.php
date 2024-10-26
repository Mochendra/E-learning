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
        <div class="card" style="width: 18rem; margin-top:50px; margin-bottom:50px;">
            <img src="{{ asset('illustrations/login.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="text-center mb-4">Register</h2>

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Masukkan Nama" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Masukkan Email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control @error('nomor_induk') is-invalid @enderror"
                            placeholder="Masukkan No.Induk" id="nomor_induk" name="nomor_induk"
                            value="{{ old('nomor_induk') }}" required>
                        @error('nomor_induk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Masukkan Password" id="password" name="password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" id="password_confirmation"
                            placeholder="Konfirmasi Password" name="password_confirmation" required>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control @error('no_whatsapp') is-invalid @enderror"
                            placeholder="Masukkan No.WhatsApp" id="no_whatsapp" name="no_whatsapp"
                            value="{{ old('no_whatsapp') }}">
                        @error('no_whatsapp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="role" value="admin">
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary w-100" style="margin-bottom: 10px">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
