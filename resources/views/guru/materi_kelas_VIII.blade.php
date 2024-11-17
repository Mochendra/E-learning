@extends('layouts.guru_materi_kelas')

@section('title', 'Materi Kelas VIII')

@section('content')
<h2 class="judul_dashboard text-center">Materi Kelas VII</h2>

<!-- Button to add a new week -->
<div class="row mb-3">
    <div class="col text-end">
        <button id="addWeekButton" class="btn btn-primary">Tambah Minggu</button>
    </div>
</div>

<table class="table table-striped table-bordered rounded-table mt-4" id="materiTable">
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
                    <a href="/materi_kelas_VIII_materi" class="btn btn-danger btn-sm w-100">Tambah Materi</a>
                    <a href="/materi_kelas_VIII_pengumpulan" class="btn btn-danger btn-sm w-100">Tambah Pengumpulan</a>
                    <a href="/materi_kelas_VIII_quiz" class="btn btn-danger btn-sm w-100">Tambah Quiz</a>
                </div>
            </td>
            <td>
                <a href="/hasil_tugas_kelas_VIII" class="btn btn-warning btn-sm w-100">Lihat</a>
            </td>
            <td>
                <a href="/hasil_quiz_kelas_VIII" class="btn btn-success btn-sm w-100">Lihat</a>
            </td>
        </tr>
    </tbody>
</table>

<script>
    document.getElementById('addWeekButton').addEventListener('click', function() {
        // Get the tbody element
        const tbody = document.querySelector('#materiTable tbody');

        // Get the current number of weeks
        const currentWeeks = tbody.querySelectorAll('tr').length;

        // Create a new row
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <th scope="row">Minggu ${currentWeeks + 1}</th>
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
        `;

        // Append the new row to the tbody
        tbody.appendChild(newRow);
    });
</script>
@endsection