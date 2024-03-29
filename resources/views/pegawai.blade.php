@extends('layout.main')
@section('content')
<style>
    .card-title {
        text-align: center;
        font-size: 24px;
        border-bottom: 2px solid pink; /* Menambahkan garis bawah pada judul dengan warna pink dan ketebalan 2px */
        padding-bottom: 10px; /* Menambahkan padding bawah agar terlihat lebih rapi */
        margin-bottom: 20px; /* Memperbesar jarak antara judul dan form */
    }
    .form-control {
        font-size: 18px;
    }
    .form-control::placeholder {
        font-size: 14px; /* Mengubah ukuran placeholder menjadi lebih kecil */
    }
    .small-text {
        font-size: 14px;
        text-align: left; /* Membuat tulisan menjadi rata kiri */
        margin-bottom: 5px; /* Memperkecil jarak antara tulisan dan garis */
    }
    .btn-submit {
        color: blue;
        background-color: pink;
        border-color: pink;
    }
    .btn-submit:hover {
        background-color: #ff69b4;
        border-color: #ff69b4;
    }
    .btn-center {
        display: flex;
        justify-content: center;
    }
</style>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-8 mb-lg-0 mb-4 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Form Data Pegawai</h5>
                </div>
                <div class="card-body">
                    <form id="pegawaiForm">
                        <div class="small-text">
                            Silakan masukkan data pegawai di sini.
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama :</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama pegawai">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan : </label>
                            <select class="form-select" id="jabatan">
                                <option value="Direktur">Direktur</option>
                                <option value="Manager">Manager</option>
                                <option value="Administrasi">Administrasi</option>
                                <option value="Biasa">Biasa</option>
                                <option value="Cleaning Service">Cleaning Service</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji (nominal) :</label>
                            <input type="number" class="form-control" id="gaji" placeholder="Masukkan gaji pegawai">
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Pendidikan : </label>
                            <select class="form-select" id="pendidikan Terakhir : ">
                                <option selected>Pilih pendidikan terakhir</option>
                                <option>SD (Sekolah Dasar)</option>
                                <option>SMP (Sekolah Menengah Pertama)</option>
                                <option>SMA (Sekolah Menengah Atas)</option>
                                <option>SMK (Sekolah Mengah Kejuruan)</option>
                                <option>D3</option>
                                <option>D4</option>
                                <option>S1</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                        </div>
                        <div class="btn-center mt-3">
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer pt-3">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
    function submitForm() {
        alert("Data berhasil disubmit!");
    }
</script>

@endsection