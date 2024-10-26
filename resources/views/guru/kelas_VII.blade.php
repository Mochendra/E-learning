<!-- resources/views/kelas_vii.blade.php -->
@extends('layouts.guru_kelas')

@section('title', 'Daftar Kelas VII')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="/materi_kelas_VII" style="text-decoration: none; color: inherit;">
                    <div class="card text-center mb-3" style="height: 250px; cursor: pointer;">
                        <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                            <h5 class="card-title">VII A</h5>
                            <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                                <span>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/materi_kelas_VII" style="text-decoration: none; color: inherit;">
                    <div class="card text-center mb-3" style="height: 250px; cursor: pointer;">
                        <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                            <h5 class="card-title">VII B</h5>
                            <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                                <span>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/materi_kelas_VII" style="text-decoration: none; color: inherit;">
                    <div class="card text-center mb-3" style="height: 250px; cursor: pointer;">
                        <div class="card-body" style="display: flex; flex-direction: column; height: 100%;">
                            <h5 class="card-title">VII C</h5>
                            <div class="card-footer bg-transparent border-success" style="margin-top: auto;">
                                <span>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- ganti card --}}
@endsection
