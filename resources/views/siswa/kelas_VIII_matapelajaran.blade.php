<!-- kelas_VIII_siswa_matapelajaran.blade.php -->
@extends('layouts.siswa_matapelajaran')

@section('title', 'Mata Pelajaran Kelas VIII')

@section('content')
    <a href="/kelas_VIII_siswa" style="text-decoration: none; color: inherit;">
        <div class="card text-center mb-3" style="width: 18rem; height: 250px; cursor: pointer;">
            <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                <h5 class="card-title">Matematika</h5>
                <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                    <span>Buka</span>
                </div>
            </div>
        </div>
    </a>
    <!-- Ulangi untuk mata pelajaran lain -->
@endsection
