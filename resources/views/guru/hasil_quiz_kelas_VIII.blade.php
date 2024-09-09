<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    <div class="container mt-5">
        <h2 class="judul_dashboard text-center">Hasil Quiz Kelas VIII</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No Absen</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Jumlah Soal</th>
                    <th scope="col">Jawaban Benar</th>
                    <th scope="col">Jawaban Salah</th>
                    <th scope="col">Skor</th>
                    <th scope="col">Detail Jawaban</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nama Siswa 1</td>
                    <td>10</td>
                    <td>8</td>
                    <td>2</td>
                    <td>80</td>
                    <td><button class="btn btn-info btn-sm w-100" onclick="showDetails(1)">Lihat Detail</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Nama Siswa 2</td>
                    <td>10</td>
                    <td>7</td>
                    <td>3</td>
                    <td>70</td>
                    <td><button class="btn btn-info btn-sm w-100" onclick="showDetails(2)">Lihat Detail</button></td>
                </tr>
            </tbody>
        </table>
        
        <!-- Modal to show details of student's answers -->
        <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailsModalLabel">Detail Jawaban Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="details-content">
                            <!-- Dynamic content for student's answers will be displayed here -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    <script>
        function showDetails(studentId) {
            // This is just an example. Normally, you'd fetch this data from your server based on studentId
            const studentAnswers = {
                1: [
                    { question: "Apa warna burung dara?", correctAnswer: "Putih", studentAnswer: "Loreng" },
                    { question: "Siapa presiden pertama Indonesia?", correctAnswer: "Soekarno", studentAnswer: "Soekarno" },
                    // Add more questions and answers...
                ],
                2: [
                    { question: "Apa warna burung dara?", correctAnswer: "Putih", studentAnswer: "Putih" },
                    { question: "Siapa presiden pertama Indonesia?", correctAnswer: "Soekarno", studentAnswer: "Soeharto" },
                    // Add more questions and answers...
                ]
            };
            
            const answers = studentAnswers[studentId] || [];
            let content = '';
            
            answers.forEach((answer, index) => {
                const isCorrect = answer.correctAnswer === answer.studentAnswer;
                content += `
                <div>
                    <p><strong>Soal ${index + 1}:</strong> ${answer.question}</p>
                    <p><strong>Jawaban Siswa:</strong> ${answer.studentAnswer} ${isCorrect ? '✅' : '❌'}</p>
                    <p><strong>Jawaban Benar:</strong> ${answer.correctAnswer}</p>
                    <hr>
                    </div>
                    `;
                });
                
                document.getElementById('details-content').innerHTML = content;
                new bootstrap.Modal(document.getElementById('detailsModal')).show();
            }
            </script>
</div>
</body>
