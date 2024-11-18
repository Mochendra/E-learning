@extends('layouts.siswa_detail_tugas')

@section('title', 'Dashboard Siswa Kelas IX')

@section('content')
<div class="card-group siswa-detail">
    <div class="card siswa-detail-detail">
        <div class="card-body siswa-detail-detail">
            <h5 class="card-title">Tugas Kelas IX</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>

        <div class="mb-3" style="width: 100%">
            <div style="padding-left: 15px; padding-right: 15px;">
                <label class="form-label card-title" style="font-size: 1.5rem">Pengumpulan Tugas</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        
            <div style="padding-left: 15px; padding-right: 15px; margin-top: 20px;">
                <p class="form-text" style="font-size: 1rem;">
                    Tanggal Deadline: <strong>15 Oktober 2024</strong>
                </p>
                <p class="form-text" style="font-size: 1rem;">
                    Jam Deadline: <strong>17:00 WIB</strong>
                </p>
            </div>
    
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button" style="width: 60%; margin-top: 20px; margin-bottom:20px;">Kirim</button>
            </div>
        </div>
    </div>
</div>

@endsection
