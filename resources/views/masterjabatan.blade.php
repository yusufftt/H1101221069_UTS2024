@extends('layout.main')
@section('content')
<style>
    .card-title {
        text-align: center;
        font-size: 24px;
        border-bottom: 2px solid pink; 
        padding-bottom: 10px; 
        margin-bottom: 20px; 
    }
    .form-control {
        font-size: 18px;
    }
    .form-control::placeholder {
        font-size: 14px; 
    }
    .small-text {
        font-size: 14px;
        text-align: left; 
        margin-bottom: 5px; 
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
                    <h5 class="card-title">Form Master Jabatan</h5>
                </div>
                <div class="card-body">
                    <form id="jabatanForm">
                        <div class="mb-3">
                            <label for="kode_jabatan" class="form-label">Kode Jabatan :</label>
                            <input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" placeholder="Masukkan kode jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="nama_jabatan" class="form-label">Nama Jabatan :</label>
                            <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Masukkan nama jabatan">
                        </div>
                        <div class="btn-center mt-3">
                            <button type="button" class="btn btn-submit" onclick="submitForm()">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-8 mb-lg-0 mb-4 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Daftar Jabatan</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Kode Jabatan</th>
                                <th scope="col">Nama Jabatan</th>
                            </tr>
                        </thead>
                        <tbody id="jabatanTable">
                            <!-- Data jabatan akan dimasukkan di sini menggunakan JavaScript -->
                        </tbody>
                    </table>
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
        var kodeJabatan = document.getElementById('kode_jabatan').value;
        var namaJabatan = document.getElementById('nama_jabatan').value;

        if (kodeJabatan.trim() === '' || namaJabatan.trim() === '') {
            alert('Mohon lengkapi kode jabatan dan nama jabatan.');
            return;
        }

        var jabatanData = {
            kode_jabatan: kodeJabatan,
            nama_jabatan: namaJabatan
        };

        var jabatanRow = '<tr><td>' + kodeJabatan + '</td><td>' + namaJabatan + '</td></tr>';
        document.getElementById('jabatanTable').innerHTML += jabatanRow;

        alert('Data jabatan berhasil disimpan.');
    }
</script>

@endsection