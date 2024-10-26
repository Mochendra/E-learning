<!-- resources/views/kelas_ix.blade.php -->
@extends('layouts.guru_hasil_tugas_kelas')

@section('title', 'Hasil Tugas Kelas IX')

@section('content')
<h2 class="judul_dashboard text-center">Hasil Tugas Kelas IX</h2>
<table class="table table-striped table-bordered rounded-table mt-4">
    <thead class="table-dark">
        <tr class="hasil_tugas">
            <th scope="col">No Absen</th>
            <th scope="col">Nama</th>
            <th scope="col">Nama Tugas</th>
            <th scope="col">File Tugas</th>
            <th scope="col">Nilai</th>
        </tr>
    </thead>
    <tbody class="hasil_tugas_siswa">
        <tr>
            <th scope="row">1</th>
            <td>Nama Siswa 1</td>
            <td>Tugas 1</td>
            <td><a href="path/to/file1.pdf" target="_blank" class="btn btn-info btn-sm w-100">Buka</a></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Nama Siswa 2</td>
            <td>Tugas 2</td>
            <td><a href="path/to/file2.jpg" target="_blank" class="btn btn-info btn-sm w-100">Buka</a></td>
            <td></td>
        </tr>
    </tbody>
</table>
@endsection
