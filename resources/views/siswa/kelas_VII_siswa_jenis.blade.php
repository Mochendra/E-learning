@extends('layouts.siswa_jenis')

@section('title', 'Dashboard Siswa Kelas VII')

@section('content')
<div class="container" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 100px; margin-bottom: 100px; justify-content: center;">
    <a href="/kelas_VII_siswa_detail_materi" style="text-decoration: none; color: inherit;">
        <div class="card text-center mb-3" style="width: 100%; height: 250px; cursor: pointer;">
            <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                <h5 class="card-title">Materi</h5>
                <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                    <span>Buka</span>
                </div>
            </div>
        </div>
    </a>
    <a href="/kelas_VII_siswa_detail_tugas" style="text-decoration: none; color: inherit;">
        <div class="card text-center mb-3" style="width: 100%; height: 250px; cursor: pointer;">
            <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                <h5 class="card-title">Tugas</h5>
                <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                    <span>Buka</span>
                </div>
            </div>
        </div>
    </a>
    <a href="/kelas_VII_siswa_detail_quiz" style="text-decoration: none; color: inherit;">
        <div class="card text-center mb-3" style="width: 100%; height: 250px; cursor: pointer;">
            <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                <h5 class="card-title">Quiz</h5>
                <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                    <span>Buka</span>
                </div>
            </div>
        </div>
    </a>
    <a href="/kelas_absensi" style="text-decoration: none; color: inherit;">
        <div class="card text-center mb-3" style="width: 100%; height: 250px; cursor: pointer;">
            <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                <h5 class="card-title">Absensi</h5>
                <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                    <span>Buka</span>
                </div>
            </div>
        </div>
    </a>
</div>
@endsection
