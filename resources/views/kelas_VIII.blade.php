<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered">
          <p class="hari">DAFTAR KELAS VIII</p>
          <thead>
            <tr class="Huruf_Angka">
              <th scope="col">Kelas</th>
              <th scope="col">Kode Kelas</th>
              <th scope="col">Tombol</th>
            </tr>
          </thead>
          <tbody class="Huruf_Angka_Kedua">
            <tr>
              <th scope="row">VIII</th>
              <td>A</td>
              <td><button type="button" class="btn btn-primary">Primary</button></td>
            </tr>
            <tr>
              <th scope="row">VIII</th>
              <td>B</td>
              <td><button type="button" class="btn btn-primary">Primary</button></td>
            </tr>
            <tr>
              <th scope="row">VIII</th>
              <td>C</td>
              <td><button type="button" class="btn btn-primary">Primary</button></td>
            </tr>
          </tbody>
        </table>
      </div>
</body>
</html>