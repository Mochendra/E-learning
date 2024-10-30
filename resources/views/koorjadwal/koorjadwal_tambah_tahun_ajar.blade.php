@extends('layouts.layout_koorjadwal')

@section('title', 'Tambah Tahun Ajar')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3" style="margin-top:5%">
        <h3>Tambah Tahun Ajar baru</h3>
        <button class="btn btn-outline-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addYearModal">Tambah Data</button>
    </div>

    <table class="table table-striped table-bordered rounded-table mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Tahun Ajar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="yearTableBody">
            <tr>
                <th scope="row">1</th>
                <td class="year-name">2024</td>
                <td>
                    <button class="btn btn-danger btn-sm me-2">Delete</button>
                    <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editYearModal">Edit</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal Tambah Tahun Ajar -->
<div class="modal fade" id="addYearModal" tabindex="-1" aria-labelledby="addYearModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addYearModalLabel">Tambah Tahun Ajar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addYearForm">
                    <div class="mb-3">
                        <label for="yearName" class="form-label">Tahun Ajar</label>
                        <input type="text" class="form-control" id="yearName" name="yearName" placeholder="Contoh: 2024" required>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Tahun Ajar -->
<div class="modal fade" id="editYearModal" tabindex="-1" aria-labelledby="editYearModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editYearModalLabel">Edit Tahun Ajar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editYearForm">
                    <div class="mb-3">
                        <label for="editYearName" class="form-label">Tahun Ajar</label>
                        <input type="text" class="form-control" id="editYearName" name="editYearName" placeholder="Contoh: 2024-2025" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
