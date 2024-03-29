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
                    <h5 class="card-title">Form Pendidikan</h5>
                </div>
                <div class="card-body">
                    <form id="pendidikanForm">
                        <div class="mb-3">
                            <label for="jenjang" class="form-label">Jenjang :</label>
                            <select class="form-select" id="jenjang" name="jenjang">
                                <option value="">Pilih jenjang pendidikan</option>
                                <option value="SD">SD (Sekolah Dasar)</option>
                                <option value="SMP">SMP (Sekolah Menengah Pertama)</option>
                                <option value="SMA">SMA (Sekolah Menengah Atas)</option>
                                <option value="SMK">SMK (Sekolah Menengah Kejuruan)</option>
                                <option value="D3">D3 (Diploma)</option>
                                <option value="S1">S1 (Sarjana)</option>
                                <option value="S2">S2 (Magister)</option>
                                <option value="S3">S3 (Doktor)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_sekolah" class="form-label">Nama Sekolah/Universitas :</label>
                            <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Masukkan nama sekolah/universitas">
                        </div>
                        <div class="mb-3">
                            <label for="tahun_lulus" class="form-label">Tahun Lulus :</label>
                            <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="Masukkan tahun lulus" min="1985" max="2024">
                        </div>
                        <div class="mb-3">
                            <label for="gelar" class="form-label">Gelar :</label>
                            <input type="text" class="form-control" id="gelar" name="gelar" placeholder="Masukkan gelar">
                        </div>
                        <div class="btn-center mt-3">
                            <button type="button" class="btn btn-submit" onclick="submitForm()">Submit</button>
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
        var jenjang = document.getElementById('jenjang').value;
        var namaSekolah = document.getElementById('nama_sekolah').value;
        var tahunLulus = document.getElementById('tahun_lulus').value;
        var gelar = document.getElementById('gelar').value;

        if (jenjang.trim() === '' || namaSekolah.trim() === '' || tahunLulus.trim() === '' || gelar.trim() === '') {
            alert('Mohon lengkapi semua kolom.');
            return;
        }

        alert('Data pendidikan berhasil disimpan.');

        location.reload();
    }
</script>

@endsection