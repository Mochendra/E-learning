<!-- resources/views/kelas_IX.blade.php -->
@extends('layouts.guru_quiz_detail_kelas')

@section('title', 'Hasil Quiz Kelas IX')

@section('content')
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
@endsection
