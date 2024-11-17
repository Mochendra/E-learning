@extends('layouts.layout_koorjadwal')

@section('title', 'Tambah Siswa')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center" style="margin-bottom: 20px;">Pengelompokan Kelas Siswa</h2>

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari siswa..." oninput="filterData()">
            </div>
            <div class="col-md-2">
                <button class="btn btn-outline-success" onclick="filterData()">Search</button>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKelas">Kelompokkan
                    Siswa</button>
            </div>
        </div>

        <table class="table table-striped table-bordered rounded-table mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col"><input type="checkbox" id="selectAll" onclick="toggleSelectAll(this)"></th>
                    <th scope="col">No.</th>
                    <th scope="col">Nomor Induk</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="siswaTableBody">
                @foreach ($siswa as $index => $student)
                    <tr>
                        <td><input type="checkbox" class="studentCheckbox" value="{{ $student->id }}" data-name="{{ $student->nama }}"></td>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student->nomor_induk }}</td> <!-- Ganti dengan kolom yang sesuai -->
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->siswaKelas->kelas->nama_kelas ?? '-' }}</td> <!-- Ambil nama kelas -->
                        <td><button class="btn btn-danger btn-sm me-2" >Delete</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal untuk Pengelompokan Kelas -->
    <div class="modal fade" id="modalKelas" tabindex="-1" aria-labelledby="modalKelasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKelasLabel">Tambahkan Kelas Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('koorjadwal.siswa.store') }}" method="POST">
                        @csrf
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" id="kelas" name="kelas_id" required>
                            <option value="">Pilih Kelas</option>
                            @foreach ($kelasList as $kelas)
                                <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                            @endforeach
                        </select>

                        <input type="hidden" name="siswa_ids" id="siswa_ids">
                        <button type="submit" class="btn btn-primary">Simpan Pengelompokan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function filterData() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#siswaTableBody tr');

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const siswaName = cells[3].textContent.toLowerCase(); // Mengambil nama siswa dari kolom ke-4
                if (siswaName.includes(input)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        function toggleSelectAll(selectAllCheckbox) {
            const checkboxes = document.querySelectorAll('.studentCheckbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        }

        // Function to collect selected students' IDs
        function collectSelectedStudents() {
            const selectedStudents = [];
            const checkboxes = document.querySelectorAll('.studentCheckbox:checked');
            checkboxes.forEach(checkbox => {
                selectedStudents.push(checkbox.value);
            });
            document.getElementById('siswa_ids').value = JSON.stringify(selectedStudents); // Store as JSON
        }

        // Ensure to collect selected students before submitting the form
        document.querySelector('form').addEventListener('submit', collectSelectedStudents);
    </script>
@endsection
