@extends('layouts.layout_koorjadwal')

@section('title', 'Tambah Kelas')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3" style="margin-top:5%">
        <h3>Tambah Mata Pelajaran baru</h3>
        <button class="btn btn-outline-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addClassModal">Tambah Data</button>
    </div>

    <table class="table table-striped table-bordered rounded-table mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Tambah Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="subjectTableBody">
            <tr>
                <th scope="row">1</th>
                <td class="subject-name">7 A</td>
                <td>
                    <button class="btn btn-danger btn-sm me-2">Delete</button>
                    <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editScheduleModal">Edit</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Modal Tambah Kelas -->
<div class="modal fade" id="addClassModal" tabindex="-1" aria-labelledby="addClassModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addClassModalLabel">Tambah Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addClassForm">
                    <div class="mb-3">
                        <label for="classLevel" class="form-label">Tingkat Kelas</label>
                        <select class="form-control" id="classLevel" name="classLevel" required>
                            <option value="" disabled selected>Pilih Tingkat Kelas</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="classCode" class="form-label">Kode Kelas</label>
                        <select class="form-control" id="classCode" name="classCode" required>
                            <option value="" disabled selected>Pilih Kode Kelas</option>
                            <!-- Loop from A to Z for class codes -->
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                            <option value="O">O</option>
                            <option value="P">P</option>
                            <option value="Q">Q</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="T">T</option>
                            <option value="U">U</option>
                            <option value="V">V</option>
                            <option value="W">W</option>
                            <option value="X">X</option>
                            <option value="Y">Y</option>
                            <option value="Z">Z</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection