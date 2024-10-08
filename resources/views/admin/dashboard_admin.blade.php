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
</head>

<body class="Background-dashboard-guru">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('illustrations/logo.png') }}" alt="Logo" style="width: 40px; height: 45px; margin-right: 10px;">
            </a>
            <a class="navbar-brand text-white" href="#">Dashboard Admin</a>
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
                    <button class="btn btn-outline-success btn-sm w-25" type="button" onclick="filterData()">Search</button>
                </div>
            </div>
        </div>                   

        <div>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">No Induk</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Peran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>0082</td>
                        <td>Ugik</td>
                        <td>Siswa</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>238742802</td>
                        <td>Budi S.Pd.</td>
                        <td>Guru</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>0124</td>
                        <td>Hendra</td>
                        <td>Siswa</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Buat Akun -->
    <div class="modal fade" id="modalAkun" tabindex="-1" aria-labelledby="modalAkunLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAkunLabel">Buat Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- Role Dropdown -->
                        <div class="mb-3">
                            <label for="role" class="form-label">Peran</label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="">Pilih Peran</option>
                                <option value="Siswa">Siswa</option>
                                <option value="Guru">Guru</option>
                                <option value="Koorjadwal">Koorjadwal</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <!-- Nomor Induk -->
                        <div class="mb-3">
                            <label for="nomorInduk" class="form-label">Nomor Induk</label>
                            <input type="text" class="form-control" id="nomorInduk" name="nomorInduk" required>
                        </div>
                        <!-- Nama -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <!-- Kata Sandi -->
                        <div class="mb-3">
                            <label for="kataSandi" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="kataSandi" name="kataSandi" required>
                        </div>
                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-primary">Buat Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <div>

    </div>

</body>

</html>
