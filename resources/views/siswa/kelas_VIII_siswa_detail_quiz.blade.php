@extends('layouts.siswa_detail_quiz')

@section('title', 'Dashboard Siswa Kelas VIII')

@section('content')
    <div class="card-group siswa-detail">
        <div class="card siswa-detail-detail">
            <h5 class="card-title">Mulai Quiz</h5>
            <p class="card-text">Klik untuk memulai quiz</p>
            <button class="btn btn-primary" type="button" style="width: 30%; margin-bottom:20px;"
                onclick="window.location.href='/kelas_VIII_siswa_quiz';">
                Mulai
            </button>
        </div>
    </div>
@endsection
