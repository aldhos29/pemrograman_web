<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <title>Pendaftaran - PMB UPJ</title>
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.0/dist/index.css);
        nav .container-xl div .btn:hover{
            background-color: transparent;
            border: white 1px solid;
        }

        .progress {
            height:1rem;
        }

        .rounded{
            box-shadow: 0px 12px 32px rgb(11 9 95 / 15%);
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 py-3">
        <div class="container-xl">
            <a class="navbar-brand" href="pmb.php">
                <img src="https://cms.sevima.com//uploads/logoaplikasi/864.jpg" width="40">
                <h5 class="float-end text-white mt-3 ms-3">Seleksi Penerimaan Mahasiswa Baru</h5>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-lg-auto">
                    <a class="nav-item nav-link" href="#">Beranda</a>
                    <a class="nav-item nav-link" href="#">Jalur Seleksi</a>
                    <a class="nav-item nav-link" href="#">Informasi</a>
                </div>
                <div class="navbar-nav ms-lg-4">
                    <a class="nav-item nav-link" href="#"></a>
                </div>
                <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                    <a href="#" class="btn btn-sm btn-primary w-full w-lg-auto">
                    Masuk
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="p-10 bg-secondary">
        <div class="container">
            <div class="row mt-0">
                <div class="col-md-8 rounded bg-white p-5 mt-5">
                    <div class="container">
                        <h3>Pendaftaran</h3>
                        <p>Anda akan melakukan proses pendaftaran</p>
                        
                        <div class="progress mt-5">
                            <div class="progress-bar bg-warning" style="width:50%">
                                Biodata Diri
                            </div>
                        </div>

                        <form method="post" action="konfirmasipmb.php">
                            
                            <h5 class="mt-5 bg-primary p-2 text-white">Jalur Pendaftaran</h5>
                            <div class="form-group mt-5">
                                <select class="form-select border-primary" name="jalur_pendaftaran" required>
                                    <option selected="true" disabled="disabled">Pilih Jalur Pendaftaran</option>
                                    <option>PMB - Reguler Rapor</option>
                                    <option>PMB - Reguler Peringkat Kelas</option>
                                    <option>PMB - Reguler Ujian Saringan Masuk</option>
                                </select>
                            </div>
                            <h5 class="mt-5 bg-primary p-2 text-white">Identitas Diri</h5>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="first">Nama Lengkap*</label>
                                    <input type="text" class="form-control form-control-sm border-primary" placeholder="" id="first" name="nama" required>
                                    </div>
                                </div>

                                <div class="col-md-6">   
                                    <div class="form-group">
                                        <label>Jenis Kelamin*</label>                               
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jk" id="jk" value="Laki-laki" required> Laki-laki
                                            </label>
                                            
                                            <label class="ms-1">
                                                <input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nohp">No. HP*</label>
                                        <input type="number" class="form-control form-control-sm border-primary" placeholder="" id="nohp" name="no_hp" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Alamat Email*</label>
                                        <input type="text" class="form-control form-control-sm border-primary" placeholder="" id="email" name="email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <label for="tgl_lahir">Tanggal Lahir*</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                        <input type="date" class="form-control form-control-sm border-primary" placeholder="" id="tgl_lahir" name="tgl_lahir" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir*</label>
                                        <input type="text" class="form-control form-control-sm border-primary" placeholder="" id="tempat_lahir" name="tempat_lahir" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="kewarganegaraan">Kewarganegaraan*</label>
                                        <input type="text" class="form-control form-control-sm border-primary" placeholder="" id="kewarganegaraan" name="kewarganegaraan" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nik">NIK/No. KTP*</label>
                                        <input type="number" class="form-control form-control-sm border-primary" placeholder="" id="nik" name="nik" required>
                                    </div>
                                </div>
                            </div>

                            
                            <h5 class="mt-5 bg-primary p-2 text-white">Asal Sekolah</h5>
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="provinsi">Tahun Lulus*</label>
                                        <input type="number" class="form-control form-control-sm border-primary" placeholder="" id="provinsi" name="provinsi" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="npsn">NPSN*</label>
                                        <input type="number" class="form-control form-control-sm border-primary" placeholder="" id="npsn" name="npsn" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="jurusan">Jurusan Sekolah*</label>
                                        <input type="text" class="form-control form-control-sm border-primary" placeholder="" id="jurusan" name="jurusan" required>
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-5 bg-primary p-2 text-white">Pilih Program Studi yang Diinginkan</h5>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-select border-primary" name="prodi" required>
                                            <option selected="true" disabled="disabled">Pilih Program Studi</option>
                                            <option disabled="disabled"><-- Fakultas Humaniora dan Bisnis --></option>
                                            <option>Manajemen</option>
                                            <option>Psikologi</option>
                                            <option>Akuntansi</option>
                                            <option>Ilmu Komunikasi</option>
                                            <option disabled="disabled"><-- Fakultas Teknologi dan Design --></option>
                                            <option>Informatika</option>
                                            <option>Sistem Informasi</option>
                                            <option>Desain Komunikasi Visual</option>
                                            <option>Desain Produk</option>
                                            <option>Teknik Sipil</option>
                                            <option>Arsitektur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mt-5">Submit</button>
                        </form>
                    </div>
                </div>
                
                <div class="col-md-1"></div>
                <div class="col-md-3 rounded bg-white p-5 mt-5" style="height:150px">
                    <div class="container text-center">
                        <p>Apakah Anda Telah</p>
                        <p>Memiliki Akun?</p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-primary w-full w-lg-auto">
                            Login Pendaftar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('#exampleModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        });

        $(document).ready(function () {
            $('#tablelist').DataTable();
        });

        // function showDiv() {
        //     document.getElementById('welcomeDiv').style.display = "block";
        // };
    </script>
</body>
</html>