<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Russo+One&display=swap" rel="stylesheet">

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
            overflow-y: auto;
            margin-bottom: 10px;
        }

        .chat-input {
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .chat-toggle {
            position: fixed;
            bottom: 10px;
            right: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1001;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('illustrations/logo.png') }}" alt="Logo"
                    style="width: 40px; height: 45px; margin-right: 10px;">
            </a>
            <a class="navbar-brand text-white" href="#">Halaman Mingguan</a>
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

    <div class="container">
        @yield('content')
    </div>

    <script>
        function toggleChat() {
            const chatBox = document.getElementById('chatBox');
            chatBox.classList.toggle('open');
        }
    </script>
</body>

</html>
