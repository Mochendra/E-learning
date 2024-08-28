<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <!-- Material Section -->
        <div class="card mb-4" style="margin-top:50px;">
            <div class="card-body" style="width:85%;">
                <h5 class="card-title">Tambahkan Materi</h5>
                <form action="/add-material" method="POST" enctype="multipart/form-data">
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

                    <!-- Optional Multiple Video Upload -->
                    <div class="mb-3">
                        <label for="formVideo" class="form-label">Upload Video (opsional)</label>
                        <input class="form-control" type="file" id="formVideo" name="video_files[]" accept="video/*"
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

        <!-- Assignment Section -->
        <div class="card" style="margin-bottom:50px;">
            <div class="card-body" style="width:85%;">
                <h5 class="card-title">Tambahkan Pengumpulan</h5>
                <form action="/add-assignment" method="POST" enctype="multipart/form-data">
                    <input class="form-control mb-2" type="text" name="assignment_title" placeholder="Judul Tugas"
                        required>
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

    </div>
</body>
