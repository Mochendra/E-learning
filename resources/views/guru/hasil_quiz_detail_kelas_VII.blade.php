<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .card-text,.form-check-label,small {
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 style="margin-top: 50px;">Hasil Quiz Siswa</h2>

        <!-- Pertanyaan pertama -->
        <div class="card siswa-detail-detail" style="padding-bottom:30px; margin-top: 10px;">
            <p class="card-text" style="width: 90%; margin-top: 30px; margin-bottom:10px;">
                1. Manakah yang benar?
            </p>

            <!-- Pilihan Jawaban -->
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" disabled>
                <label class="form-check-label" style="color: red;">
                    A. Surat
                </label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" disabled>
                <label class="form-check-label" style="color: red;">
                    B. Coklat
                </label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" disabled checked>
                <label class="form-check-label" style="color: red;">
                    C. Meja
                </label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" disabled>
                <label class="form-check-label" style="color: green;">
                    D. Kursi
                </label>
            </div>

            <!-- Tampilkan keterangan jawaban benar -->
            <div style="color: red; text-align: right; width:90%; margin-top:5px;">
                <small>Jawaban yang benar adalah: D. Kursi</small>
            </div>
        </div>

        <!-- Pertanyaan kedua -->
        <div class="card siswa-detail-detail" style="padding-bottom:30px; margin-top: 10px;">
            <p class="card-text" style="width: 90%; margin-top: 30px; margin-bottom:10px;">
                2. Pilihlah warna favorit?
            </p>

            <!-- Pilihan Jawaban -->
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" disabled checked>
                <label class="form-check-label" style="color: red;">
                    A. Merah
                </label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" disabled>
                <label class="form-check-label" style="color: green;">
                    B. Biru
                </label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" disabled>
                <label class="form-check-label" style="color: red;">
                    C. Kuning
                </label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" disabled>
                <label class="form-check-label" style="color: red;">
                    D. Hijau
                </label>
            </div>

            <div style="color: red; text-align: right; width:90%; margin-top:5px;">
                <small>Jawaban yang benar adalah: B. Biru</small>
            </div>
            
        </div>
    </div>
</body>
