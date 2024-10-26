<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Siswa</title>
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

        .table-bordered th, .table-bordered td {
            border-color: #a3c1e0; /* Warna biru muda pastel */
        }
        .Background-dashboard-guru {
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
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
            <a class="navbar-brand text-white" href="#">Dashboard Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/kelas_VII_matapelajaran">Lihat
                            Tugas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-between align-items-center w-100" style="padding-left: 10%; padding-right : 10%">
        <!-- Jadwal Siswa di sebelah kiri ujung -->
        <p class="judul_dashboard mb-3">Jadwal Siswa</p>
    
        <!-- Informasi Akademik di sebelah kanan ujung -->
        <div class="card-body text-end" style="margin-top: 10px;">
            <p>Semester: Ganjil</p>
            <p>Tahun Ajaran: 2024/2025</p>
        </div>
    </div>
    
    

    <div class="container mt-5">
        <div class="d-flex align-items-center justify-content-between flex-wrap">
            <div class="nomor_nama">
                <p>Anda Login sebagai</p>
                <p class="nomor_induk">1462100176</p>
                <p class="nama_siswa">Moch. Hendra Admaja</p>
            </div>
            

            <div class="btn-group mb-3">
                <!-- Dropdown for selecting a class -->
                <select class="form-select form-select-sm me-2" id="kelasDropdown">
                    <option value="">Tingkat Kelas</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            
                <!-- Dropdown for selecting a code class -->
                <select class="form-select form-select-sm me-2" id="kodeKelas">
                    <option value="">Kelas</option>
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
            
                <!-- Search Button -->
                <button class="btn btn-outline-success btn-sm" type="button" onclick="filterData()">Search</button>
            </div>
            
        </div>

        <table class="table table-striped table-bordered rounded-table mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Guru</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Kelas</th>
                    {{-- <th scope="col">Kode Kelas</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Senin</td>
                    <td>07 : 00</td>
                    <td>Ahmad</td>
                    <td>Seni Budaya</td>
                    <td>7 F</td>
                    {{-- <td>F</td> --}}
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Rabu</td>
                    <td>09 : 00</td>
                    <td>Habib</td>
                    <td>Kimia</td>
                    <td>7 A</td>
                    {{-- <td>H</td> --}}
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jumat</td>
                    <td>12 : 00</td>
                    <td>Rizky</td>
                    <td>Matematika</td>
                    <td>9 A</td>
                    {{-- <td>A</td> --}}
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
