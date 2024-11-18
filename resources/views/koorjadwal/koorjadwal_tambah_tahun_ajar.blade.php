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
                <th scope="col">Semester</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="yearTableBody">
            @if(isset($semesters) && $semesters->isEmpty())
                <tr>
                    <td colspan="3" class="text-center">Data masih kosong</td>
                </tr>
            @elseif(isset($semesters))
                @foreach($semesters as $index => $semester)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $semester->tahun_ajaran }}</td>
                        <td>{{ $semester->name }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm me-2" data-id="{{ $semester->id }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $semester->id }}').submit();">Delete</button>
                            {{-- <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#editYearModal" data-id="{{ $semester->id }}" data-name="{{ $semester->name }}" data-tahun="{{ $semester->tahun_ajaran }}">Edit</button> --}}
                            <form id="delete-form-{{ $semester->id }}" action="{{ route('koorjadwal.destroy', $semester->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" class="text-center">Data tidak ditemukan</td>
                </tr>
            @endif
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
                <form action="{{ route('koorjadwal.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="yearName" class="form-label">Tahun Ajar</label>
                        <input type="text" class="form-control" id="yearName" name="yearName" placeholder="Contoh: 2024-2025" required>
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <select name="semester" id="semester" class="form-select" required>
                            <option value="">Pilih Semester</option>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                        </select>
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
                <form action="{{ route('koorjadwal.update', 'id') }}" method="POST" id="editYearForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="editYearId">
                    <div class="mb-3">
                        <label for="editYearName" class="form-label">Semester</label>
                        <select name="name" id="editYearName" class="form-control" required>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editTahunAjaran" class="form-label">Tahun Ajar</label>
                        <input type="text" class="form-control" name="tahun_ajaran" id="editTahunAjaran" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('editYearId').value = this.dataset.id;
                document.getElementById('editYearName').value = this.dataset.name;
                document.getElementById('editTahunAjaran').value = this.dataset.tahun;
                
                document.getElementById('editYearForm').action = `{{ url('/koorjadwal/update') }}/${this.dataset.id}`;
            });
        });
    });
</script>
@endsection
