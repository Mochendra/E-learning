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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            .Background-koor {
                background-color: #f8f9fa;
                /* Warna latar belakang yang lembut */
            }

            .table-bordered th,
            .table-bordered td {
                border-color: #a3c1e0;
                /* Warna biru muda pastel */
            }

            .btn svg {
                width: 24px;
                height: 24px;
                fill: currentColor;
                color: #dc3545;
            }
        </style>
    </head>

    <body class="Background-koor ">
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('illustrations/logo.png') }}" alt="Logo"
                        style="width: 40px; height: 45px; margin-right: 10px;">
                </a>
                <a class="navbar-brand text-white" href="/koorjadwal/jadwal">Halaman Koordinator Jadwal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                                href="/koorjadwal/wali_kelas">Tambah
                                wali Kelas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                                href="/koorjadwal/tambah_kelas">Tambah
                                Kelas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/koorjadwal/siswa">Tambah
                                Kelas
                                Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                                href="/koorjadwal/tambah_pelajaran">Tambah Mata Pelajaran Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                                href="/koorjadwal/tambah_tahun_ajar">Tambah Tahun Ajar</a>
                        </li>
                        <!-- Ubah bagian form logout -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="button" class="btn" onclick="confirmLogout()">
                                <x-logout />
                            </button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex" style="padding-right: 10%; padding-top: 10px;">
            <!-- Informasi Akademik di sebelah kanan ujung -->
            <div class="card-body" style="margin-left: 5%; margin-top: 3%;">
                <div style="margin-bottom: 10px;">
                    <label for="semester" class="form-label">Semester:</label>
                    <span id="semester" class="form-label">Ganjil</span>
                </div>
                <div style="margin-bottom:15px;">
                    <label for="tahun_ajar" class="form-label">Tahun Ajar:</label>
                    <span id="tahun_ajar" class="form-label">2024-2025</span>
                </div>

                <p class="nama_guru">Anda Login sebagai: Hendra</p>
            </div>
        </div>

        <div class="container mt-5">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                <p class="judul_dashboard mb-3">Jadwal Mengajar</p>
                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-success btn-sm me-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#addScheduleModal">Tambah Data</button>
                </div>
            </div>
            <!-- Table displaying the schedule -->
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($jadwalsEmpty)
                        <tr>
                            <td colspan="8" class="text-center">
                                Tidak ada jadwal tersedia
                            </td>
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
                                
                                <td> @if ($jadwal->guruRelation)
                                    {{ $jadwal->guruRelation->name ?? $jadwal->guruRelation->nama ?? 'Nama Guru Tidak Tersedia' }}
                                @else
                                    Guru Tidak Ditemukan
                                @endif</td>
                                <td>{{ optional($jadwal->mataPelajaran)->name ?? 'Mata Pelajaran tidak tersedia' }}</td>
                                <td>
                                    {{ optional($jadwal->kelas)->tingkat ?? 'Tingkat' }}
                                    {{ optional($jadwal->kelas)->kode_kelas ?? 'Kelas' }}
                                </td>
                                <td>
                                    {{ optional($jadwal->semester)->name ?? 'Semester' }}
                                    {{ optional($jadwal->semester)->tahun_ajaran ?? 'Tahun Ajaran' }}
                                </td>
                                <td>
                                    <!-- Delete button -->
                                    <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>


        <!-- Modal for adding a new schedule -->
        <div class="modal fade" id="addScheduleModal" tabindex="-1" aria-labelledby="addScheduleModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addScheduleModalLabel">Tambah Jadwal Mengajar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addScheduleForm" method="POST" action="{{ route('jadwal.store') }}">
                            @csrf
                            <div class="row">
                                <div class="d-flex justify-content-between flex-wrap">
                                    {{-- Dropdown Guru --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="guruSelect" class="form-label">Pilih Guru</label>
                                        @if ($gurusEmpty)
                                            <div class="alert alert-warning">
                                                Tidak ada guru tersedia
                                            </div>
                                        @else
                                            <select id="guruSelect" name="guru_id" class="form-select">
                                                <option value="">-- Pilih Guru --</option>
                                                @foreach ($gurus as $guru)
                                                    <option value="{{ $guru->id }}">
                                                        {{ $guru->nama ?? ($guru->name ?? 'Guru Tanpa Nama') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>

                                    {{-- Dropdown Mata Pelajaran --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="mapel" class="form-label">Pilih Mata Pelajaran</label>
                                        @if ($mapelsEmpty)
                                            <div class="alert alert-warning">
                                                Tidak ada mata pelajaran tersedia
                                            </div>
                                        @else
                                            <select id="mapelSelect" name="mata_pelajaran_id" class="form-select">
                                                <option value="">-- Pilih Mata Pelajaran --</option>
                                                @foreach ($mapels as $mapel)
                                                    <option value="{{ $mapel->id }}">
                                                        {{ $mapel->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between flex-wrap">
                                    {{-- Dropdown Kelas --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label class="form-label">Pilih Kelas</label>
                                        @if ($kelasEmpty)
                                            <div class="alert alert-warning">
                                                Tidak ada kelas tersedia
                                            </div>
                                        @else
                                            <select name="kelas_id" class="form-select">
                                                <option value="">-- Pilih Kelas --</option>
                                                @foreach ($kelas as $k)
                                                    <option value="{{ $k->id }}">
                                                        {{ $k->tingkat }} {{ $k->kode_kelas }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>

                                    {{-- Dropdown Hari --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="hari" class="form-label">Hari</label>
                                        <select class="form-select" id="hari" name="hari">
                                            <option value="">-- Pilih Hari --</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between flex-wrap">
                                    {{-- Jam Mulai --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="jam_mulai" class="form-label">Jam Mulai</label>
                                        <div class="d-flex">
                                            <select class="form-select me-2" id="jam_mulai_hour"
                                                name="jam_mulai_hour" style="width: 100px;">
                                                <option value="">Jam</option>
                                                <?php for($i = 0; $i < 24; $i++): ?>
                                                <option value="<?= sprintf('%02d', $i) ?>"><?= sprintf('%02d', $i) ?>
                                                </option>
                                                <?php endfor; ?>
                                            </select>
                                            <select class="form-select" id="jam_mulai_minute" name="jam_mulai_minute"
                                                style="width: 100px;">
                                                <option value="">Menit</option>
                                                <?php for($i = 0; $i < 60; $i += 1): ?>
                                                <option value="<?= sprintf('%02d', $i) ?>"><?= sprintf('%02d', $i) ?>
                                                </option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Jam Selesai --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="jam_selesai" class="form-label">Jam Selesai</label>
                                        <div class="d-flex">
                                            <select class="form-select me-2" id="jam_selesai_hour"
                                                name="jam_selesai_hour" style="width: 100px;">
                                                <option value="">Jam</option>
                                                <?php for($i = 0; $i < 24; $i++): ?>
                                                <option value="<?= sprintf('%02d', $i) ?>"><?= sprintf('%02d', $i) ?>
                                                </option>
                                                <?php endfor; ?>
                                            </select>
                                            <select class="form-select" id="jam_selesai_minute"
                                                name="jam_selesai_minute" style="width: 100px;">
                                                <option value="">Menit</option>
                                                <?php for($i = 0; $i < 60; $i += 1): ?>
                                                <option value="<?= sprintf('%02d', $i) ?>"><?= sprintf('%02d', $i) ?>
                                                </option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- Dropdown Semester --}}
                                <label for="semester_ganjil" class="form-label">Semester Ganjil</label>
                                <select name="semester_ganjil_id" class="form-select">
                                    <option value="">-- Pilih Semester Ganjil --</option>
                                    @foreach ($semesters as $semester)
                                        @if ($semester->name == 'Ganjil')
                                            <option value="{{ $semester->id }}">{{ $semester->name }} - {{ $semester->tahun_ajaran }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                
                                <label for="semester_genap" class="form-label">Semester Genap</label>
                                <select name="semester_genap_id" class="form-select">
                                    <option value="">-- Pilih Semester Genap --</option>
                                    @foreach ($semesters as $semester)
                                        @if ($semester->name == 'Genap')
                                            <option value="{{ $semester->id }}">{{ $semester->name }} - {{ $semester->tahun_ajaran }}</option>
                                        @endif
                                    @endforeach
                                </select>

                            </div>
                            <div>
                                <label style="margin-top: 1%; color:#dc3545; font-size:0.8rem;">*Jika jadwal untuk 2
                                    semester masukkan keduanya</label>
                            </div>
                            {{-- <div class="mb-3">
                                    <label for="tahun_ajar" class="form-label">Tahun Ajar</label>
                                    @if ($semestersEmpty)
                                        <div class="alert alert-warning">
                                            Data semester belum tersedia. Silakan tambahkan data semester terlebih
                                            dahulu.
                                        </div>
                                    @else
                                        <select class="form-select" id="tahun_ajar" name="tahun_ajar" required>
                                            <option value="">Pilih Tahun Ajar</option>
                                            @foreach ($semesters as $semester)
                                                <option value="{{ $semester->tahun_ajaran }}">
                                                    {{ $semester->tahun_ajaran }}
                                                </option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div> --}}
                            <button type="submit" class="btn btn-primary" style="margin-top: 5%;">Tambah
                                Jadwal</button>
                            {{-- bagi dua --}}
                        </form>
                    </div>
                </div>
            </div>
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
                });
            }
            
            $(document).ready(function() {
    $('#addScheduleForm').on('submit', function(e) {
        e.preventDefault();

        // Log data yang akan dikirim
        console.log($(this).serialize());

        $.ajax({
            type: 'POST',
            url: '{{ route('jadwal.store') }}',
            data: $(this).serialize(),
            success: function(response) {
                console.log('Respon sukses:', response);
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.message
                    }).then(() => {
                        location.reload(); // Refresh halaman
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', xhr.responseText);
                Swal.fire({
                    icon: 'error',
                    title: 'Kesalahan Server',
                    text: xhr.responseText
                });
            }
        });
    });
});


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


            document.addEventListener('DOMContentLoaded', function() {
                const jamMulaiHour = document.getElementById('jam_mulai_hour');
                const jamMulaiMinute = document.getElementById('jam_mulai_minute');
                const jamSelesaiHour = document.getElementById('jam_selesai_hour');
                const jamSelesaiMinute = document.getElementById('jam_selesai_minute');

                function updateJamSelesaiOptions() {
                    const mulaiHour = parseInt(jamMulaiHour.value);
                    const mulaiMinute = parseInt(jamMulaiMinute.value);

                    // Reset jam selesai
                    jamSelesaiHour.selectedIndex = 0;
                    jamSelesaiMinute.selectedIndex = 0;

                    // Disable options for jam selesai
                    for (let i = 0; i < jamSelesaiHour.options.length; i++) {
                        const hourValue = parseInt(jamSelesaiHour.options[i].value);
                        if (hourValue < mulaiHour || (hourValue === mulaiHour && jamSelesaiMinute.value <
                                mulaiMinute)) {
                            jamSelesaiHour.options[i].disabled = true;
                        } else {
                            jamSelesaiHour.options[i].disabled = false;
                        }
                    }
                }

                jamMulaiHour.addEventListener('change', updateJamSelesaiOptions);
                jamMulaiMinute.addEventListener('change', updateJamSelesaiOptions);
            });
        </script>
    </body>
