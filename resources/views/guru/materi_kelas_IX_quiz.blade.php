@extends('layouts.guru_materi_kelas_quiz')

@section('title', 'Kelas IX')

@section('content')
<div class="card" style="margin-bottom:50px; margin-top:50px;">
    <div class="card-body" style="width:85%;">
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

        <h5 class="card-title">Tambahkan Soal</h5>
        <form action="/buat-soal" method="POST" id="questionForm">
            @csrf

            <!-- Container for Dynamic Questions -->
            <div id="questions-container">
                <!-- Initial question will be generated here via JS -->
            </div>

            <!-- Button to add more questions and submit form -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <button type="button" class="btn btn-secondary" onclick="addQuestion()">Tambah Soal</button>
                <button type="submit" class="btn btn-primary">Buat Soal</button>
            </div>
        </form>
    </div>
</div>

<script>
    let questionCount = 0;

    // Function to dynamically add a question
    function addQuestion() {
        questionCount++;

        const container = document.getElementById('questions-container');
        const questionHtml = `
            <div class="mb-3" id="question_${questionCount}">
                <label for="question_${questionCount}" class="form-label">Soal ${questionCount}</label>
                <textarea id="question_${questionCount}" name="questions[${questionCount}][question]" class="form-control" rows="3" required></textarea>
                
                <div class="mb-3">
                    <label class="form-label">Pilihan Jawaban</label>
                    <input type="text" name="questions[${questionCount}][options][]" class="form-control mb-2" placeholder="Jawaban A" required>
                    <input type="text" name="questions[${questionCount}][options][]" class="form-control mb-2" placeholder="Jawaban B" required>
                    <input type="text" name="questions[${questionCount}][options][]" class="form-control mb-2" placeholder="Jawaban C" required>
                    <input type="text" name="questions[${questionCount}][options][]" class="form-control mb-2" placeholder="Jawaban D" required>
                </div>
                
                <div class="mb-3">
                    <label for="correct_option_${questionCount}" class="form-label">Pilih Jawaban Benar untuk Soal ${questionCount}</label>
                    <select name="questions[${questionCount}][correct_option]" id="correct_option_${questionCount}" class="form-select" required>
                        <option value="0">Jawaban A</option>
                        <option value="1">Jawaban B</option>
                        <option value="2">Jawaban C</option>
                        <option value="3">Jawaban D</option>
                    </select>
                </div>
                
                <!-- Delete Button -->
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-danger mb-3" onclick="deleteQuestion(${questionCount})">Hapus Soal</button>
                </div>
                <hr>
            </div>
        `;

        container.insertAdjacentHTML('beforeend', questionHtml);
    }

    // Call addQuestion function to add an initial question when the page loads
    window.onload = addQuestion;
</script>

@endsection
