<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
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
        .table-bordered th,
        .table-bordered td {
            border-color: #a3c1e0;
            /* Warna biru muda pastel */
        }

        .Background-dashboard-guru {
            background-color: #f8f9fa;
            /* Warna latar belakang yang lembut */
        }
    </style>
</head>

<body class="Background-dashboard-guru">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('illustrations/logo.png') }}" alt="Logo"
                    style="width: 40px; height: 45px; margin-right: 10px;">
            </a>
            <a class="navbar-brand text-white" href="#">Halaman Admin</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="tambah_akun" style="margin-bottom: 10px">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAkun">Tambah Akun</button>
        </div>

        <div class="row mb-3">
            <div class="col-md-4 col-sm-8 ms-auto">
                <div class="d-flex flex-nowrap">
                    <input type="text" class="form-control me-2 w-75" id="searchInput" placeholder="Cari nama">
                    <button class="btn btn-outline-success btn-sm w-25" type="button"
                        onclick="filterData()">Search</button>
                </div>
            </div>
        </div>

        <div>
            <table class="table table-striped table-bordered rounded-table mt-4">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">No Induk</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Peran</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $user->nomor_induk }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ ucfirst($user->role) }}</td>
                            <td>{{ $user->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Buat Akun -->
    <!-- Modal Buat Akun -->
    <div class="modal fade" id="modalAkun" tabindex="-1" aria-labelledby="modalAkunLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAkunLabel">Buat Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" placeholder="Masukkan Nama" name="name" value="{{ old('name') }}"
                                required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}"
                                required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control @error('nomor_induk') is-invalid @enderror"
                                placeholder="Masukkan No. Induk" id="nomor_induk" name="nomor_induk"
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
                                placeholder="Masukkan No. WhatsApp" id="no_whatsapp" name="no_whatsapp"
                                value="{{ old('no_whatsapp') }}">
                            @error('no_whatsapp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Pilih Role</label>
                            <select class="form-select @error('role') is-invalid @enderror" id="role"
                                name="role" required>
                                <option value="" disabled selected>Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="guru">Guru</option>
                                <option value="siswa">Siswa</option>
                                <option value="koorjadwal">Koorjadwal</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100" style="margin-bottom: 10px">
                            Buat Akun
                        </button>
                    </form>
                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <script>
        function filterData() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const tableRows = document.querySelectorAll('tbody tr');

            tableRows.forEach(row => {
                const userName = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                row.style.display = userName.includes(searchInput) ? '' : 'none';
            });
        }
    </script>

</body>

</html>
