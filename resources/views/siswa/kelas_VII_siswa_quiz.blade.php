<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas IX</title>
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

<body>
    <div class="container">
        <label for="formFile" class="form-label card-title" style="font-size: 1.5rem; margin-top: 20px;">Quiz</label>
        <!-- Gunakan d-flex flex-column untuk tampilan vertikal -->
        <div class="d-flex flex-column siswa-detail">
            <div class="card siswa-detail-detail" style="padding-bottom:30px;">
                <p class="card-text" style="width: 90%; margin-top: 30px; margin-bottom:10px;">1. This is a wider card
                    with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <!-- Soal 1 menggunakan name="question1" -->
                <div class="form-check" style="width: 80%;">
                    <input class="form-check-input" type="radio" name="question1" id="question1_option1" value="option1">
                    <label class="form-check-label" for="question1_option1">First option</label>
                </div>
                <div class="form-check" style="width: 80%;">
                    <input class="form-check-input" type="radio" name="question1" id="question1_option2" value="option2">
                    <label class="form-check-label" for="question1_option2">Second option</label>
                </div>
                <div class="form-check" style="width: 80%;">
                    <input class="form-check-input" type="radio" name="question1" id="question1_option3" value="option3">
                    <label class="form-check-label" for="question1_option3">Third option</label>
                </div>
                <div class="form-check" style="width: 80%;">
                    <input class="form-check-input" type="radio" name="question1" id="question1_option4" value="option4">
                    <label class="form-check-label" for="question1_option4">Fourth option</label>
                </div>
            </div>

            <div class="card siswa-detail-detail" style="padding-bottom:30px; margin-top: 10px;">
                <p class="card-text" style="width: 90%; margin-top: 30px; margin-bottom:10px;">2. This is a wider card
                    with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <!-- Soal 2 menggunakan name="question2" -->
                <div class="form-check" style="width: 80%;">
                    <input class="form-check-input" type="radio" name="question2" id="question2_option1" value="option1">
                    <label class="form-check-label" for="question2_option1">First option</label>
                </div>
                <div class="form-check" style="width: 80%;">
                    <input class="form-check-input" type="radio" name="question2" id="question2_option2" value="option2">
                    <label class="form-check-label" for="question2_option2">Second option</label>
                </div>
                <div class="form-check" style="width: 80%;">
                    <input class="form-check-input" type="radio" name="question2" id="question2_option3" value="option3">
                    <label class="form-check-label" for="question2_option3">Third option</label>
                </div>
                <div class="form-check" style="width: 80%;">
                    <input class="form-check-input" type="radio" name="question2" id="question2_option4" value="option4">
                    <label class="form-check-label" for="question2_option4">Fourth option</label>
                </div>
            </div>

            <!-- Tombol di bawah soal -->
            <div class="text-center" style="margin-top: 20px;">
                <button type="button" class="btn btn-danger" style="width: 10%;">Selesai</button>  
            </div>
        </div>
    </div>
</body>
