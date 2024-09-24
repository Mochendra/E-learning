<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
          /* Gaya sidebar chat yang tersembunyi */
          .chat-box {
            position: fixed;
            right: -300px;
            top: 0;
            height: 100%;
            width: 300px;
            background-color: #f8f9fa;
            border-left: 1px solid #ddd;
            display: flex;
            flex-direction: column;
            /* Flexbox untuk mengatur posisi */
            padding: 10px;
            overflow: hidden;
            transition: right 0.3s ease;
            z-index: 1000;
        }

        .chat-box.open {
            right: 0;
        }

        .chat-messages {
            flex: 1;
            /* Membuat pesan tumbuh memenuhi ruang */
            overflow-y: auto;
            margin-bottom: 10px;
        }

        .chat-input {
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .chat-toggle {
            position: fixed;
            /* Tetap terlihat di layar meskipun digulir */
            bottom: 10px;
            /* Berada 20px dari bawah layar */
            right: 10px;
            /* Berada 20px dari kanan layar */
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1001;
            /* Pastikan tombol berada di atas elemen lain */
        }

        @media (max-width: 768px) {
            /* Responsive adjustments */
            .chat-box {
                width: 100%;
                right: -100%;
            }

            .chat-box.open {
                right: 0;
            }

            .navbar-brand img {
                width: 30px;
                height: 35px;
            }

            .table {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('illustrations/logo.png') }}" alt="Logo" class="img-fluid" style="width: 40px; height: 45px; margin-right: 10px;">
            </a>
            <a class="navbar-brand text-white" href="#">Dashboard Guru</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
            </div>
        </div>
    </nav>
       <!-- Tombol untuk membuka chat -->
       <div class="chat-toggle" onclick="toggleChat()">💬</div>

       <!-- Kolom Chat -->
       <div id="chatBox" class="chat-box">
           <h5>Forum Chat Diskusi</h5>
           <div class="chat-messages">
               <p><strong>Ilham:</strong> Bagaimana tugas ini?</p>
               <p><strong>Guru:</strong> Silahkan cek materi dulu ya!</p>
           </div>
           <!-- Kolom input pesan di bawah -->
           <div class="chat-input">
               <input type="text" class="form-control" placeholder="Ketik pesan...">
               <button class="btn btn-primary mt-2 w-100">Kirim</button>
           </div>
       </div>
  
    <div class="container mt-5">
        <h2 class="judul_dashboard text-center">Materi Kelas VII</h2>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr class="Huruf_Angka">
                    <th scope="col">Minggu ke</th>
                    <th scope="col">Materi/Tugas/Quiz</th>
                    <th scope="col">Hasil Tugas</th>
                    <th scope="col">Hasil Quiz</th>
                </tr>
            </thead>
            <tbody class="Huruf_Angka_Kedua">
                <tr>
                    <th scope="row">Minggu 1</th>
                    <td>
                        <div style="display: flex; width:100%; flex-direction:row; gap: 4px; "> 
                        <a href="/materi_kelas_VII_materi" class="btn btn-danger btn-sm w-100">Tambah Materi</a>
                        <a href="/materi_kelas_VII_pengumpulan" class="btn btn-danger btn-sm w-100">Tambah Pengumpulan</a>
                        <a href="/materi_kelas_VII_quiz" class="btn btn-danger btn-sm w-100">Tambah Quiz</a>
                    </div>
                    <td>
                        <a href="/hasil_tugas_kelas_VII" class="btn btn-warning btn-sm w-100">Lihat</a>
                    </td>
                    <td>
                        <a href="/hasil_quiz_kelas_VII" class="btn btn-success btn-sm w-100">Lihat</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Minggu 2</th>
                    <td>
                        <div style="display: flex; width:100%; flex-direction:row; gap: 4px; "> 
                        <a href="/materi_kelas_VII_materi" class="btn btn-danger btn-sm w-100">Tambah Materi</a>
                        <a href="/materi_kelas_VII_pengumpulan" class="btn btn-danger btn-sm w-100">Tambah Pengumpulan</a>
                        <a href="/materi_kelas_VII_quiz" class="btn btn-danger btn-sm w-100">Tambah Quiz</a>
                    </div>
                    <td>
                        <a href="/hasil_tugas_kelas_VII" class="btn btn-warning btn-sm w-100">Lihat</a>
                    </td>
                    <td>
                        <a href="/hasil_quiz_kelas_VII" class="btn btn-success btn-sm w-100">Lihat</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Minggu 3</th>
                    <td>
                        <div style="display: flex; width:100%; flex-direction:row; gap: 4px; "> 
                        <a href="/materi_kelas_VII_materi" class="btn btn-danger btn-sm w-100">Tambah Materi</a>
                        <a href="/materi_kelas_VII_pengumpulan" class="btn btn-danger btn-sm w-100">Tambah Pengumpulan</a>
                        <a href="/materi_kelas_VII_quiz" class="btn btn-danger btn-sm w-100">Tambah Quiz</a>
                    </div>
                    <td>
                        <a href="/hasil_tugas_kelas_VII" class="btn btn-warning btn-sm w-100">Lihat</a>
                    </td>
                    <td>
                        <a href="/hasil_quiz_kelas_VII" class="btn btn-success btn-sm w-100">Lihat</a>
                    </td>
                </tr>
            </tbody>
            
        </table>
        </div>
    </div>
    <script>
        function toggleChat() {
            const chatBox = document.getElementById('chatBox');
            chatBox.classList.toggle('open');
        }
    </script>
</body>

</html>
{{-- ctrl + shift + k --}}
{{-- shift + alt + panah bawah --}}