@extends('layouts.layout_koorjadwal')

@section('title', 'Tambah Kelas')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3" style="margin-top:5%">
        <h3>Tambah Mata Pelajaran baru</h3>
        <button class="btn btn-outline-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addClassModal">Tambah Data</button>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-bordered rounded-table mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="subjectTableBody">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            @forelse($kelas as $index => $k)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td class="subject-name">{{ $k->tingkat }} {{ $k->kode_kelas }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm me-2" onclick="deleteKelas({{ $k->id }})">Delete</button>
                        {{-- <button class="btn btn-primary btn-sm edit-btn" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editScheduleModal"
                                data-id="{{ $k->id }}"
                                data-tingkat="{{ $k->tingkat_kelas }}"
                                data-kode="{{ $k->kode_kelas }}">
                            Edit
                        </button> --}}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data kelas</td>
                </tr>
            @endforelse
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
                <form action="{{ route('koorjadwal.store_kelas') }}" method="POST">
                    @csrf
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
                            @foreach(range('A', 'Z') as $letter)
                                <option value="{{ $letter }}">{{ $letter }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Kelas -->
<div class="modal fade" id="editClassModal" tabindex="-1" aria-labelledby="editClassModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClassModalLabel">Edit Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editClassForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editClassId" name="id">
                    <div class="mb-3">
                        <label for="editClassLevel" class="form-label">Tingkat Kelas</label>
                        <select class="form-control" id="editClassLevel" name="classLevel" required>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editClassCode" class="form-label">Kode Kelas</label>
                        <select class="form-control" id="editClassCode" name="classCode" required>
                            @foreach(range('A', 'Z') as $letter)
                                <option value="{{ $letter }}">{{ $letter }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {
    // Edit Kelas
    $(document).on('click', '.edit-btn', function() {
        let id = $(this).data('id');
        $.get(`/koorjadwal/tambah_kelas/${id}/edit`, function(data) {
            $('#editClassId').val(data.id);
            $('#editClassLevel').val(data.tingkat_kelas);
            $('#editClassCode').val(data.kode_kelas);
            var editModal = new bootstrap.Modal(document.getElementById('editClassModal'));
            editModal.show();
        }).fail(function(xhr, status, error) {
            console.error(xhr.responseText);
            alert('Terjadi kesalahan saat mengambil data kelas');
        });
    });

    $('#editClassForm').submit(function(e) {
        e.preventDefault();
        let id = $('#editClassId').val();
        let formData = $(this).serialize();

        $.ajax({
            url: `/koorjadwal/tambah_kelas/${id}`,
            type: 'PUT',
            data: formData,
            success: function(response) {
                if(response.success) {
                    alert(response.message);
                    location.reload();
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Terjadi kesalahan saat mengupdate kelas: ' + xhr.responseText);
            }
        });
    });
});

// Delete Kelas
function deleteKelas(id) {
    if(confirm('Apakah Anda yakin ingin menghapus kelas ini?')) {
        $.ajax({
            url: `/koorjadwal/tambah_kelas/${id}`,
            type: 'DELETE',
            success: function(response) {
                if(response.success) {
                    alert(response.message);
                    location.reload();
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Terjadi kesalahan saat menghapus kelas: ' + xhr.responseText);
            }
        });
    }
}
</script>
@endsection