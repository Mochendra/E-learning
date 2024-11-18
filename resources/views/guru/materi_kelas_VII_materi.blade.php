@extends('layouts.guru_materi_kelas_materi')

@section('title', 'Kelas VII')

@section('content')
<div class="container">
    <div class="card-group siswa-detail">
        <div class="card siswa-detail-detail">
            <div class="card-body siswa-detail-detail">
                <h5 class="card-title">@yield('materi-title')</h5>
                <p class="card-text">@yield('materi-content')</p>
            </div>
            <div class="mb-3">
                <h6>Gambar:</h6>
                <img src="@yield('materi-gambar')" class="img-fluid mb-3" alt="Gambar Materi">
            </div>
            <h6>Video YouTube:</h6>
            <div class="mb-3 video-responsive">
                <iframe id="youtubeVideo" src="@yield('materi-video')" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4" style="margin-top:50px; margin-left:5%; margin-right:5%;">
    <div class="card-body" style="width:85%;">
        <h5 class="card-title">Tambahkan Materi Kelas VII</h5>
        <form action="{{ route('store.material', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="mata_pelajaran_id" value="{{ $id }}"> <!-- Pass the subject ID -->        
            <input type="hidden" name="kelas_id" value="{{ $kelas_id }}"> <!-- Assuming you pass the class ID -->
            
            <!-- Week Input -->
            <div class="mb-3">
                <input type="number" class="form-control" name="minggu" placeholder="Minggu ke" required>
            </div>

            <!-- Title Input -->
            <div class="mb-3">
                <input type="text" class="form-control" id="materialTitle" name="material_title"
                    placeholder="Judul Materi" required>
            </div>

            <!-- Textarea for Material Content -->
            <div class="mb-3">
                <textarea class="form-control" name="material_content" rows="4" placeholder="Tambahkan Materi disini.." required></textarea>
            </div>

            <!-- Optional Multiple Image Upload -->
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Gambar (opsional)</label>
                <input class="form-control" type="file" id="formFile" name="image_files[]" accept="image/*"
                    multiple>
                <small class="form-text text-muted">Hold down the Ctrl (Windows) or Command (Mac) button to
                    select multiple files. (opsional)</small>
            </div>

                <!-- YouTube Link Input (optional) -->
                <div class="mb-3">
                    <label for="youtubeLink" class="form-label">Link YouTube (opsional)</label>
                    <input type="url" class="form-control" id="youtubeLink" name="youtube_link"
                        placeholder="Masukkan Link YouTube">
                </div>

                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary" type="submit">Tambahkan Materi</button>
                </div>
            </form>
        </div>
    </div>
@endsection
