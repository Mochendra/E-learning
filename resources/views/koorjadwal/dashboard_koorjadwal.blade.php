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
            <a class="navbar-brand text-white" href="/dashboard_koorjadwal">Halaman Koordinator Jadwal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/koorjadwal_tambah_kelas">Tambah
                            Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/koorjadwal_siswa">Tambah Kelas
                            Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                            href="/koorjadwal_tambah_mata_pelajaran">Tambah Mata Pelajaran Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                            href="/koorjadwal_tambah_tahun_ajar">Tambah Tahun Ajar</a>
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
        <div class="card-body" style="margin-left: 5%; margin-top:3%;">
            <label for="semester" class="form-label">Semester</label>
            <select class="form-select short-select" id="semester" name="semester" style="width: 100px;">
                <option value="ganjil">Ganjil</option>
                <option value="genap">Genap</option>
            </select>
            <label for="tahun_ajar" class="form-label">Tahun Ajar</label>
            <select class="form-select" id="tahun_ajar" name="tahun_ajar" style="width: 100px;">
                <option value="2024-2025">2024</option>
                <option value="2025-2026">2025</option>
            </select>
            {{-- pindah ke samping search --}}

            <p class="nama_guru">Anda Login sebagai: Hendra</p>
        </div>
    </div>

    <div class="container mt-5">
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
                    <th scope="col">No.</th>
                    <th scope="col">Hari</th>
                    <th scope="col" colspan="2" class="text-center">Jam</th> <!-- Gabungkan kolom jam -->
                    <th scope="col">Guru</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Kelas</th>
                    {{-- <th scope="col">Kode kelas</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Senin</td>
                    <td class="jam">07 : 00</td>
                    <td class="jam">09 : 00</td>
                    <td>Ahmad</td>
                    <td>Seni Budaya</td>
                    <td>7 A</td>
                    {{-- <td>F</td> --}}
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Rabu</td>
                    <td class="jam">09 : 00</td>
                    <td class="jam">10 : 00</td>
                    <td>Habib</td>
                    <td>Kimia</td>
                    <td>7 B</td>
                    {{-- <td>H</td> --}}
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jumat</td>
                    <td class="jam">12 : 00</td>
                    <td class="jam">13 : 00</td>
                    <td>Rizky</td>
                    <td>Matematika</td>
                    <td>9 C</td>
                    {{-- <td>A</td> --}}
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Modal for adding a new schedule -->
    <div class="modal fade" id="addScheduleModal" tabindex="-1" aria-labelledby="addScheduleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addScheduleModalLabel">Tambah Jadwal Mengajar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addScheduleForm">
                        <div class="mb-3">
                            <label for="guru" class="form-label">Pilih Guru</label>
                            <select class="form-select" id="guru" name="guru">
                                <option value="">Pilih Guru</option>
                                <option value="Ahmad">Ahmad</option>
                                <option value="Habib">Habib</option>
                                <option value="Rizky">Rizky</option>
                                <option value="Bima">Bima</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mapel" class="form-label">Pilih Mapel</label>
                            <select class="form-select" id="mapel" name="mapel">
                                <option value="">Pilih Mapel</option>
                                <option value="B. Indonesia">B. Indonesia</option>
                                <option value="B. Inggris">B. Inggris</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Kimia">Kimia</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Pilih Kelas</label>
                            <select class="form-select" id="kelas" name="kelas">
                                <option value="">Pilih Kelas</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kode_kelas" class="form-label">Pilih Kode Kelas</label>
                            <select class="form-select" id="kode_kelas" name="kode_kelas">
                                <option value="">Pilih Kode Kelas</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                                <option value="K">K</option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="N">N</option>
                                <option value="O">O</option>
                                <option value="P">P</option>
                                <option value="Q">Q</option>
                                <option value="R">R</option>
                                <option value="S">S</option>
                                <option value="T">T</option>
                                <option value="U">U</option>
                                <option value="V">V</option>
                                <option value="W">W</option>
                                <option value="X">X</option>
                                <option value="Y">Y</option>
                                <option value="Z">Z</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari</label>
                            <select class="form-select" id="hari" name="hari">
                                <option value="">Pilih Hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jam_mulai" class="form-label">Jam Mulai</label>
                            <input type="text" id="jam_mulai" name="jam_mulai" class="form-control"
                                placeholder="Contoh: 07:00" pattern="([01][0-9]|2[0-3]):[0-5][0-9]" required>
                            <small class="form-text text-muted">Format: Jam:Menit (24 jam).</small>
                        </div>
                        <div class="mb-3">
                            <label for="jam_selesai" class="form-label">Jam Selesai</label>
                            <input type="text" id="jam_selesai" name="jam_selesai" class="form-control"
                                placeholder="Contoh: 09:00" pattern="([01][0-9]|2[0-3]):[0-5][0-9]" required>
                            <small class="form-text text-muted">Format: Jam:Menit (24 jam).</small>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Semester</label>
                            <select class="form-select" id="hari" name="hari">
                                <option value="Semester">Genap</option>
                                <option value="Semester">Ganjil</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Tahun Ajar</label>
                            <select class="form-select" id="hari" name="hari">
                                <option value="Tahun">2024</option>
                                <option value="Tahun">2025</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
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
    </script>
</body>
