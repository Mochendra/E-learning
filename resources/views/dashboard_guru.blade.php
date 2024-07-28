<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="Backgound-dashboard-guru">
  <nav class="navbar navbar-expand-lg navbar-custom"> 
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('illustrations/logo.png') }}" alt="Logo" style="width: 40px; height: 45px; margin-right: 10px;">
      </a>
      <a class="navbar-brand text-white" href="#">Dashboard Guru</a> <!-- Menggunakan kelas text-white untuk teks putih -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Pilih Kelas Mengajar</a> <!-- Menggunakan kelas text-white -->
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <div class="container mt-5">
        <table class="table table-bordered">
          <p class="hari">SENIN</p>
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Jam</th>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Kelas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>07 : 00</td>
              <td>Seni Budaya</td>
              <td>7F</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>09 : 00</td>
              <td>Seni Budaya</td>
              <td>7H</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>12 : 00</td>
              <td>Seni Budaya</td>
              <td>9A</td>
            </tr>
          </tbody>
        </table>
      </div>
</body>
</html>
