@extends('layouts.guru_materi_kelas_pengumpulan')

@section('title', 'Kelas VIII')

@section('content')
<div class="card" style="margin-bottom:50px; margin-top:50px">
    <div class="card-body" style="width:85%;">
        <h5 class="card-title">Tambahkan Pengumpulan</h5>
        <form action="/add-assignment" method="POST" enctype="multipart/form-data">
            @csrf <!-- Don't forget to add CSRF token -->
            <input class="form-control mb-2" type="text" name="assignment_title" placeholder="Judul Tugas" required>
            <textarea class="form-control mb-2" name="assignment_description" rows="2" placeholder="Deskripsi Tugas" required></textarea>

            <!-- Deadline Section -->
            <div class="mb-3">
                <label for="due_date" class="form-label">Pilih Tanggal Deadline</label>
                <input class="form-control mb-2" type="date" name="due_date" id="due_date" required>
                <small>Pilih Bulan, Hari dan Tahun</small>
            </div>

            <div class="mb-3">
                <label for="due_time" class="form-label">Pilih Jam Deadline</label>
                <input class="form-control mb-2" type="time" name="due_time" id="due_time" required>
                <small>Pilih (AM untuk pagi), dan (PM untuk sore)</small>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Upload File Referensi (opsional)</label>
                <input class="form-control" type="file" id="formFile" name="reference_file">
                <small class="form-text text-muted">File ini tidak wajib diisi.</small>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Tambahkan Pengumpulan</button>
            </div>
        </form>
    </div>
</div>
@endsection
