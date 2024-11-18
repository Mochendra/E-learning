<!-- resources/views/quizzes/class_ix.blade.php -->
@extends('layouts.siswa_quiz')

@section('title', 'Kelas IX')

@section('content')
    <label for="formFile" class="form-label card-title" style="font-size: 1.5rem; margin-top: 20px;">Klik Selesai Setelah Mengerjakan</label>
    <div class="d-flex flex-column siswa-detail">
        <div class="card siswa-detail-detail" style="padding-bottom:30px;">
            <p class="card-text" style="width: 90%; margin-top: 30px; margin-bottom:10px;">1. Question for class IX.</p>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" name="question1" id="question1_option1" value="option1">
                <label class="form-check-label" for="question1_option1">First option</label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" name="question1" id="question1_option2" value="option2">
                <label class="form-check-label" for="question1_option2">Second option</label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" name="question1" id="question1_option3" value="option3">
                <label class="form-check-label" for="question1_option3">Third option</label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" name="question1" id="question1_option4" value="option4">
                <label class="form-check-label" for="question1_option4">Fourth option</label>
            </div>
        </div>

        <div class="card siswa-detail-detail" style="padding-bottom:30px; margin-top: 10px;">
            <p class="card-text" style="width: 90%; margin-top: 30px; margin-bottom:10px;">2. Another question for class IX.</p>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" name="question2" id="question2_option1" value="option1">
                <label class="form-check-label" for="question2_option1">First option</label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" name="question2" id="question2_option2" value="option2">
                <label class="form-check-label" for="question2_option2">Second option</label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" name="question2" id="question2_option3" value="option3">
                <label class="form-check-label" for="question2_option3">Third option</label>
            </div>
            <div class="form-check" style="width: 80%;">
                <input class="form-check-input" type="radio" name="question2" id="question2_option4" value="option4">
                <label class="form-check-label" for="question2_option4">Fourth option</label>
            </div>
        </div>

        <div class="text-center" style="margin-top: 20px;">
            <button type="button" class="btn btn-danger" >Selesai</button>  
        </div>
    </div>
@endsection
