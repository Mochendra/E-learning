<!-- resources/views/classes/kelas_ix.blade.php -->
@extends('layouts.guru_quiz_kelas')

@section('title', 'Hasil Quiz Kelas IX')

@section('content')
    <h2 class="judul_dashboard text-center" style="margin-top: 5%">Hasil Quiz Kelas IX</h2>
    <table class="table table-striped table-bordered rounded-table mt-4">
        <thead class="table-dark">
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
            const studentAnswers = {
                1: [
                    { question: "Apa warna burung dara?", correctAnswer: "Putih", studentAnswer: "Loreng" },
                    { question: "Siapa presiden pertama Indonesia?", correctAnswer: "Soekarno", studentAnswer: "Soekarno" },
                ],
                2: [
                    { question: "Apa warna burung dara?", correctAnswer: "Putih", studentAnswer: "Putih" },
                    { question: "Siapa presiden pertama Indonesia?", correctAnswer: "Soekarno", studentAnswer: "Soeharto" },
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
@endsection
