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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        .table-bordered th,
        .table-bordered td {
            border-color: #a3c1e0;
        }

        .Background-dashboard-guru {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h2>Data Guru</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahGuru">Tambah Guru</button>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIP</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Tanggal lahir</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($guru) && $guru->isNotEmpty())
                    @foreach($guru as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data guru.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Modal Guru -->
    <div class="modal fade" id="modalTambahGuru" tabindex="-1" aria-labelledby="modalTambahGuruLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('guru.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahGuruLabel">Tambah Guru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>        
    </div>

</body>

</html>
