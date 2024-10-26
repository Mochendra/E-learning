<!-- resources/views/kelas_vii.blade.php -->

@extends('layouts.guru_materi_kelas')

@section('title', 'Materi Kelas VIII')

@section('content')
<h2 class="judul_dashboard text-center">Materi Kelas VII</h2>
<table class="table table-striped table-bordered rounded-table mt-4">
    <thead class="table-dark">
        <tr class="Huruf_Angka">
            <th scope="col">Minggu ke</th>
            <th scope="col">Materi/Tugas/Quiz</th>
            <th scope="col">Hasil Tugas</th>
            <th scope="col">Hasil Quiz</th>
        </tr>
    </thead>
    <tbody class="Huruf_Angka_Kedua">
        <tr>
            <th scope="row">Minggu 1</th>
            <td>
                <div style="display: flex; width:100%; flex-direction:row; gap: 4px; "> 
                    <a href="/materi_kelas_VII_materi" class="btn btn-danger btn-sm w-100">Tambah Materi</a>
                    <a href="/materi_kelas_VII_pengumpulan" class="btn btn-danger btn-sm w-100">Tambah Pengumpulan</a>
                    <a href="/materi_kelas_VII_quiz" class="btn btn-danger btn-sm w-100">Tambah Quiz</a>
                </div>
            </td>
            <td>
                <a href="/hasil_tugas_kelas_VII" class="btn btn-warning btn-sm w-100">Lihat</a>
            </td>
            <td>
                <a href="/hasil_quiz_kelas_VII" class="btn btn-success btn-sm w-100">Lihat</a>
            </td>
        </tr>
        <!-- Repeat for other weeks as needed -->
    </tbody>
</table>
@endsection
