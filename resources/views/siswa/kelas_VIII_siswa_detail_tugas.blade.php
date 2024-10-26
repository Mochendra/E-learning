@extends('layouts.siswa_detail_tugas')

@section('title', 'Dashboard Siswa Kelas VIII')

@section('content')
    <div class="card-group siswa-detail">
        <div class="card siswa-detail-detail">
            <div class="card-body siswa-detail-detail">
                <h5 class="card-title">Tugas Kelas VIII</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>

            <div class="mb-3" style="width: 100%">
                <div style="padding-left: 15px; padding-right:15px;">
                    <label for="formFile" class="form-label card-title" style="font-size: 1.5rem">Pengumpulan tugas</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button" style="width: 60%; margin-top: 20px; margin-bottom:20px;">Kirim</button>
                </div>
            </div>
            <div class="card-footer siswa-detail-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>
@endsection
