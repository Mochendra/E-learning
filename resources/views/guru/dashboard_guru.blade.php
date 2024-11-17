<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Russo+One&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .table-bordered th, .table-bordered td {
            border-color: #a3c1e0; /* Warna biru muda pastel */
        }
        .Background-dashboard-guru {
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
        }
        .btn svg {
            width: 24px;
            /* Sesuaikan ukuran yang diinginkan */
            height: 24px;
            /* Sesuaikan ukuran yang diinginkan */
            fill: currentColor;
            color: #dc3545;
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
            <a class="navbar-brand text-white" href="#">Dashboard Guru</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/rekap_nilai">Rekap Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/kelas_angkatan_guru">Kelas Mengajar</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="margin-right:5%">
                            @csrf
                            <button type="button" class="btn" onclick="confirmLogout()">
                                <x-logout />
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <script>
                function confirmLogout() {
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Anda akan keluar dari sistem",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Logout!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('logout-form').submit();
                        }
                    })
                }
                </script>
        </div>
    </nav>

    <div class="d-flex justify-content-between align-items-center w-100" style="padding-left: 10%; padding-right : 10%">
        <!-- Jadwal Siswa di sebelah kiri ujung -->
        <p class="judul_dashboard mb-3">Jadwal Guru</p>
    
        <!-- Informasi Akademik di sebelah kanan ujung -->
        <div class="card-body text-end" style="margin-top: 10px;">
            <p>Semester: Ganjil</p>
            <p>Tahun Ajaran: 2024</p>
        </div>
    </div>
    

    <div class="container mt-5">
        <div class="d-flex align-items-center justify-content-between flex-wrap">
            <div class="nomor_nama">
                <p>Anda Login sebagai</p>
                <p class="nama_guru">ahmad</p>
            </div>
            
            <div class="btn-group">
                <!-- Dropdown for selecting a teacher -->
                <select class="form-select form-select-sm me-2" id="guruDropdown">
                    <option value="">Pilih Guru</option>
                    <option value="Ahmad">Ahmad</option>
                    <option value="Habib">Habib</option>
                    <option value="Rizky">Rizky</option>
                    <option value="Bima">Bima</option>
                </select>

                <!-- Dropdown for selecting a subject -->
                <select class="form-select form-select-sm me-2" id="mapelDropdown">
                    <option value="">Pilih Mapel</option>
                    <option value="B. Indonesia">B. Indonesia</option>
                    <option value="B. Inggris">B. Inggris</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Kimia">Kimia</option>
                </select>

                <!-- Dropdown for selecting a class -->
                <select class="form-select form-select-sm me-2" id="kelasDropdown">
                    <option value="">Pilih Kelas</option>
                    <option value="7A">7 A</option>
                    <option value="7B">7 B</option>
                    <option value="7C">7 C</option>
                    <option value="7D">7 D</option>
                </select>

                <!-- Search Button -->
                <button class="btn btn-outline-success btn-sm" type="button" onclick="filterData()">Search</button>
            </div>
        </div>

        <table class="table table-striped table-bordered rounded-table mt-4">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Guru</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelas</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                @if ($jadwalsEmpty)
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada jadwal tersedia</td>
                    </tr>
                @else
                    @foreach ($jadwals as $index => $jadwal)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $jadwal->hari ?? 'Tidak ada' }}</td>
                            <td>
                                {{ \Carbon\Carbon::parse($jadwal->jam_mulai)->format('H:i') ?? 'Tidak ada' }} -
                                {{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') ?? 'Tidak ada' }}
                            </td>
                            <td>
                                {{ $jadwal->guruRelation->name ?? $jadwal->guruRelation->nama ?? 'Nama Guru Tidak Tersedia' }}
                            </td>
                            <td>{{ optional($jadwal->mataPelajaran)->name ?? 'Mata Pelajaran tidak tersedia' }}</td>
                            <td>
                                {{ optional($jadwal->kelas)->tingkat ?? 'Tingkat' }}
                                {{ optional($jadwal->kelas)->kode_kelas ?? 'Kelas' }}
                            </td>
                            <td>
                                {{ optional($jadwal->semester)->name ?? 'Semester' }}
                                {{ optional($jadwal->semester)->tahun_ajaran ?? 'Tahun Ajaran' }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>        
    </div>
</body>

</html>
{{-- navbar pindah ke kanan --}}

{{-- tambahkan navbar rekap nilai --}}

{{-- berisi nama, nilai akhir (rata2), detail, tombol kirim wa --}}
