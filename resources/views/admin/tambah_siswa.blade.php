<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
        <h2>Data Siswa</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa">Tambah Siswa</button>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($siswa) && $siswa->isNotEmpty())
                    @foreach($siswa as $item)
                        <tr>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data siswa</td>
                    </tr>
                @endif
            </tbody>            
        </table>
    </div>
    <!-- Modal Siswa -->
    <div class="modal fade" id="modalTambahSiswa" tabindex="-1" aria-labelledby="modalTambahSiswaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahSiswaLabel">Tambah Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" name="nik" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
