@extends('layouts.layout_koorjadwal')

@section('title', 'Tambah Mata Pelajaran')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3" style="margin-top:5%">
            <h3>Tambah Mata Pelajaran baru</h3>
            <button class="btn btn-outline-success btn-sm" type="button" data-bs-toggle="modal"
                data-bs-target="#addScheduleModal">Tambah Data</button>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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
                @forelse($mataPelajaran as $index => $mp)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td class="subject-name">{{ $mp->name }}</td> <!-- Menggunakan 'name' sesuai dengan model -->
                        <td>
                            <button class="btn btn-danger btn-sm me-2"
                                onclick="deleteMataPelajaran({{ $mp->id }})">Delete</button>
                            {{-- <button class="btn btn-primary btn-sm edit-btn" data-bs-toggle="modal"
                                data-bs-target="#editScheduleModal" data-id="{{ $mp->id }}"
                                data-nama="{{ $mp->name }}">
                                Edit
                            </button> --}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data mata pelajaran</td>
                    </tr>
                @endforelse
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
                    <!-- Di dalam modal tambah -->
                    <form id="pelajaranForm" action="{{ route('store_pelajaran') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Mata Pelajaran -->
    <div class="modal fade" id="editScheduleModal" tabindex="-1" aria-labelledby="editScheduleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editScheduleModalLabel">Edit Mata Pelajaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="edit_nama_pelajaran" class="form-label">Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" id="edit_nama_pelajaran" name="nama_pelajaran"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Fungsi untuk menghapus mata pelajaran
        function deleteMataPelajaran(id) {
            if (confirm('Apakah Anda yakin ingin menghapus mata pelajaran ini?')) {
                $.ajax({
                    url: `/koorjadwal/tambah_pelajaran/${id}`,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            location.reload();
                        }
                    }
                });
            }
        }

        // Event handler untuk tombol edit
        $(document).on('click', '.edit-btn', function() {
            let id = $(this).data('id');
            let nama = $(this).data('nama');

            $('#edit_nama_pelajaran').val(nama);
            $('#editForm').attr('action', `/koorjadwal/tambah_pelajaran/${id}`);
        });

        document.getElementById('pelajaranForm').addEventListener('submit', function(e) {
            console.log('Form submitted');
            console.log('Form data:', {
                name: document.getElementById('name').value
            });
        });

        document.getElementById('pelajaranForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah form submit default

            let formData = new FormData(this);

            fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Terjadi kesalahan!');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan!');
                });
        });
    </script>
@endsection
