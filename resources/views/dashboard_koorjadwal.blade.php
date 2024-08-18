<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Koordinator Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap"
        rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="Backgound-dashboard-guru">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('illustrations/logo.png') }}" alt="Logo"
                    style="width: 40px; height: 45px; margin-right: 10px;">
            </a>
            <a class="navbar-brand text-white" href="#">Dashboard Koordinator Jadwal</a>
            <!-- Menggunakan kelas text-white untuk teks putih -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/kelas_angkatan_guru">Pilih
                            Kelas Mengajar</a> <!-- Menggunakan kelas text-white -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   <div class="container mt-5">
        <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
            <p class="judul_dashboard mb-3">Jadwal Mengajar</p>
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-success btn-sm me-2" type="button" data-bs-toggle="modal" data-bs-target="#addScheduleModal">Tambah Data</button>
            </div>
        </div>

        <!-- Table displaying the schedule -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Hari</th>        
                    <th scope="col">Jam</th>
                    <th scope="col">Guru</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Senin</td>
                    <td>07 : 00</td>
                    <td>Ahmad</td>
                    <td>Seni Budaya</td>
                    <td>7F</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Rabu</td>
                    <td>09 : 00</td>
                    <td>Habib</td>
                    <td>Kimia</td>
                    <td>7H</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jumat</td>
                    <td>12 : 00</td>
                    <td>Rizky</td>
                    <td>Matematika</td>
                    <td>9A</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal for adding a new schedule -->
    <div class="modal fade" id="addScheduleModal" tabindex="-1" aria-labelledby="addScheduleModalLabel" aria-hidden="true">
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
                                <option value="7A">7 A</option>
                                <option value="7B">7 B</option>
                                <option value="7C">7 C</option>
                                <option value="7D">7 D</option>
                                <option value="8A">8 A</option>
                                <option value="8B">8 B</option>
                                <option value="8C">8 C</option>
                                <option value="8D">8 D</option>
                                <option value="9A">9 A</option>
                                <option value="9B">9 B</option>
                                <option value="9C">9 C</option>
                                <option value="9D">9 D</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari</label>
                            <input type="text" class="form-control" id="hari" name="hari">
                        </div>
                        <div class="mb-3">
                            <label for="jam" class="form-label">Jam</label>
                            <input type="text" class="form-control" id="jam" name="jam">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
