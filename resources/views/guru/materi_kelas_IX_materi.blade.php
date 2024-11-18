@extends('layouts.guru_materi_kelas_materi')

@section('title', 'Kelas IX')

@section('content')
    <div class="card mb-4" style="margin-top:50px; margin-left:5%; margin-right:5%;">
        <div class="card-body" style="width:85%;">
            <h5 class="card-title">Tambahkan Materi Kelas IX</h5>
            <form action="/add-material" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Title Input -->
                <div class="mb-3">
                    <input type="text" class="form-control" id="materialTitle" name="material_title"
                        placeholder="  Judul Materi" required>
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
