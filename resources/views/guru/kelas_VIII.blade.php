@extends('layouts.guru_kelas')

@section('title', 'Daftar Kelas VII')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            @if ($jadwalKelasVIII->isEmpty())
                <p>Tidak ada jadwal untuk Kelas VIII.</p>
            @else
            @foreach ($jadwalKelasVIII as $jadwal)
            <div class="col-md-4">
                <a href="{{ route('materi_kelas_VII', ['kelas_id' => $jadwal->kelas->id, 'id' => $jadwal->mataPelajaran->id]) }}"
                    style="text-decoration: none; color: inherit;">
                    <div class="card text-center mb-3" style="height: 250px; cursor: pointer;">
                        <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                            <h5 class="card-title">
                                {{ $jadwal->kelas->tingkat }} {{ $jadwal->kelas->kode_kelas }}
                            </h5>
                            <h5 class="card-text">Mengajar :
                                {{ $jadwal->mataPelajaran->name ?? 'Mata pelajaran tidak tersedia' }}</h5>
                                    <p class="card-text">Sebagai Guru : {{ $jadwal->guru->nama ?? 'Guru tidak ditemukan' }}
                                    </p>
                                    <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                                        <span>Jam: {{ date('H:i', strtotime($jadwal->jam_mulai)) }} -
                                            {{ date('H:i', strtotime($jadwal->jam_selesai)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
