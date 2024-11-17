<!-- resources/views/kelas_ix.blade.php -->
@extends('layouts.guru_hasil_tugas_kelas')

@section('title', 'Hasil Tugas Kelas IX')

@section('content')
<h2 class="judul_dashboard text-center">Hasil Tugas Kelas IX</h2>
<table class="table table-striped table-bordered rounded-table mt-4">
    <thead class="table-dark">
        <tr class="hasil_tugas">
            <th scope="col" style="width: 5%;">No</th>
            <th scope="col" style="width: 25%;">Nama</th>
            <th scope="col" style="width: 20%;">Nama Tugas</th>
            <th scope="col" style="width: 15%;">File Tugas</th>
            <th scope="col" style="width: 15%;">Nilai</th>
        </tr>
    </thead>
    <tbody class="hasil_tugas_siswa">
        <tr>
            <th scope="row">1</th>
            <td>Nama Siswa 1</td>
            <td>Tugas 1</td>
            <td><a href="path/to/file1.pdf" target="_blank" class="btn btn-info btn-sm w-100">Buka</a></td>
            <td>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control form-control-sm me-2" style="width:100%;" placeholder="Nilai">
                    <button class="btn btn-success btn-sm" onclick="saveValue(this)">Simpan</button>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Nama Siswa 2</td>
            <td>Tugas 2</td>
            <td><a href="path/to/file2.jpg" target="_blank" class="btn btn-info btn-sm w-100">Buka</a></td>
            <td>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control form-control-sm me-2" style="width:100%;" placeholder="Nilai">
                    <button class="btn btn-success btn-sm" onclick="saveValue(this)">Simpan</button>
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endsection
