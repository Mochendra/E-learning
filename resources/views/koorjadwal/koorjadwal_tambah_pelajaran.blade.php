@extends('layouts.layout_koorjadwal')

@section('title', 'Tambah Mata Pelajaran')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3" style="margin-top:5%">
        <h3>Tambah Mata Pelajaran baru</h3>
        <button class="btn btn-outline-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addScheduleModal">Tambah Data</button>
    </div>

    <table class="table table-striped table-bordered rounded-table mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Mata Pelajaran</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="subjectTableBody">
            <tr>
                <th scope="row">1</th>
                <td class="subject-name">Matematika</td>
                <td>
                    <button class="btn btn-danger btn-sm me-2">Delete</button>
                    <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editScheduleModal">Edit</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal Tambah Mata Pelajaran -->
<div class="modal fade" id="addScheduleModal" tabindex="-1" aria-labelledby="addScheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addScheduleModalLabel">Tambah Mata Pelajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addSubjectForm">
                    <div class="mb-3">
                        <label for="subjectName" class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="subjectName" name="subjectName" required>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Mata Pelajaran -->
<div class="modal fade" id="editScheduleModal" tabindex="-1" aria-labelledby="editScheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editScheduleModalLabel">Edit Mata Pelajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editSubjectForm">
                    <div class="mb-3">
                        <label for="editSubjectName" class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" id="editSubjectName" name="editSubjectName" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
