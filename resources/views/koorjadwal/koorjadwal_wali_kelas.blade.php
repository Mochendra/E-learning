@extends('layouts.layout_koorjadwal')

@section('title', 'Tambah Wali Kelas')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center" style="margin-bottom: 20px;">Pengelompokan Wali Kelas</h2>

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari guru..." oninput="filterData()">
            </div>
            <div class="col-md-2">
                <button class="btn btn-outline-success" onclick="filterData()">Cari</button>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKelas">Kelompokkan
                    Guru</button>
            </div>
        </div>

        <table class="table table-striped table-bordered rounded-table mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col"><input type="checkbox" id="selectAll" onclick="toggleSelectAll(this)"></th>
                    <th scope="col">No.</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Wali Kelas</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="guruTableBody">
                @foreach ($guru as $index => $teacher)
                    <tr>
                        <td><input type="checkbox" class="teacherCheckbox" value="{{ $teacher->id }}"></td>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $teacher->nip }}</td>
                        <td>{{ $teacher->nama }}</td>
                        <td>{{ $teacher->waliKelas->kelas->nama_kelas ?? '-' }}</td> <!-- Ambil nama kelas -->
                        <td>
                            @if ($teacher->role == 'guru')
                                <span class="badge bg-primary">Guru</span>
                            @elseif($teacher->role == 'koorjadwal')
                                <span class="badge bg-success">Koordinator Jadwal</span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm me-2" >Delete</button>
                        </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Modal untuk Pengelompokan Wali Kelas -->
    <div class="modal fade" id="modalKelas" tabindex="-1" aria-labelledby="modalKelasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKelasLabel">Tambahkan Wali Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="groupForm" action="{{ route('koorjadwal.guru.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" id="kelas" name="kelas_id" required>
                                <option value="">Pilih Kelas</option>
                                @foreach ($kelasList as $kelas)
                                    <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="guru_ids" id="guru_ids" value="">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function filterData() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#guruTableBody tr');

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const guruName = cells[3].textContent.toLowerCase(); // Mengambil nama guru dari kolom ke-4
                if (guruName.includes(input)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        function toggleSelectAll(selectAllCheckbox) {
            const checkboxes = document.querySelectorAll('.teacherCheckbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        }

        document.getElementById('groupForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Ambil ID guru yang dipilih
            const selectedTeachers = Array.from(document.querySelectorAll('.teacherCheckbox:checked')).map(
                checkbox => checkbox.value);

            if (selectedTeachers.length === 0) {
                alert('Silakan pilih guru yang akan dikelompokkan.');
                return;
            }

            // Set nilai ke input tersembunyi
            document.getElementById('guru_ids').value = JSON.stringify(selectedTeachers);

            // Submit form
            this.submit();
        });
    </script>
@endsection
