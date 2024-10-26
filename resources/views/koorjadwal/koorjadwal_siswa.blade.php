@extends('layouts.layout_koorjadwal')

@section('title', 'Tambah Siswa')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center" style="margin-bottom: 20px;">Pengelompokan Kelas Siswa</h2>

        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari siswa..."
                    oninput="filterData()">
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
                </tr>
            </thead>
            <tbody id="siswaTableBody">
                <tr>
                    <td><input type="checkbox" class="studentCheckbox" value="Ahmad"></td>
                    <td>1</td>
                    <td>12345</td>
                    <td>Ahmad</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="studentCheckbox" value="Habib"></td>
                    <td>2</td>
                    <td>12346</td>
                    <td>Habib</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="studentCheckbox" value="Rizky"></td>
                    <td>3</td>
                    <td>12347</td>
                    <td>Rizky</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="studentCheckbox" value="Bima"></td>
                    <td>4</td>
                    <td>12348</td>
                    <td>Bima</td>
                    <td>-</td>
                </tr>
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
                    <form id="groupForm">
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" id="kelas" required>
                                <option value="">Pilih Kelas</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kodeKelas" class="form-label">Kode Kelas</label>
                            <select class="form-select" id="kodeKelas" required>
                                <option value="">Pilih Kode Kelas</option>
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

        document.getElementById('groupForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const kelas = document.getElementById('kelas').value;
            const kodeKelas = document.getElementById('kodeKelas').value;
            const selectedStudents = Array.from(document.querySelectorAll('.studentCheckbox:checked')).map(
                checkbox => checkbox.value);

            if (selectedStudents.length === 0) {
                alert('Silakan pilih siswa yang akan dikelompokkan.');
                return;
            }

            alert(`Siswa ${selectedStudents.join(', ')} berhasil dikelompokkan ke Kelas ${kelas} ${kodeKelas}`);
            this.reset();
            const modal = bootstrap.Modal.getInstance(document.getElementById('modalKelas'));
            modal.hide();
        });
    </script>
@endsection