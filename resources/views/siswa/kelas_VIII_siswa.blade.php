<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas VIII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Russo+One&display=swap"
        rel="stylesheet">

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
    </style>
</head>

<body>
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
    <div class="container">
        <div class="card card-minggu">
            <a href="/kelas_VIII_siswa_jenis" style="text-decoration : none; width: 100%; color:inherit; gap:20px;">
            <div class="card-header card-isi-siswa">
                Minggu 1
            </div>
            <div class="card-body card-isi-siswa">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </a>
        </div>
        <div class="card card-minggu">
            <a href="/kelas_VIII_siswa_jenis" style="text-decoration : none; width: 100%; color:inherit; gap:20px;">
            <div class="card-header card-isi-siswa">
                Minggu 2
            </div>
            <div class="card-body card-isi-siswa">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </a>
        </div>
    </div>
    <script>
        function toggleChat() {
            const chatBox = document.getElementById('chatBox');
            chatBox.classList.toggle('open');
        }
    </script>
</body>