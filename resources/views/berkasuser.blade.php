<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/img/bjb.ico" />
    <title>Berkas</title>
    <style>
        .navbar {
            background-color: #359d24;
        }

        .sarat {
            background-color: #f3f3f3;
            background-size: cover;
            background-repeat: no-repeat;
        }

        /* Ganti warna latar belakang dan teks tombol */
        #fileToUpload {
            color: rgb(0, 0, 0);
            border: none;
            padding: 2px 2px;
            /* Ubah ukuran tombol */
            font-size: 14px;
        }
    </style>


</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <div id="sidebar">
            <div class="sidebar-header">
            <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="logo-container">
        <div class="logo">
            <img src="/assets/img/bjb.png" alt="Logo" class="front-face">
            <img src="/assets/img/bjb.png" alt="Back of Logo" class="back-face">
        </div>
    </div>
    <script src="script.js"></script>
</body>
                <div class="image-container">
                    <img src="/assets/img/bjb.png" style="height: 80px; width: 100px; text-align: center;"
                        class="img-fluid" />
                </div>
                <h5
                    style="text-align: center; font-size: 22px; white-space: nowrap; font-family: 'Bebas Neue', sans-serif;">
                    <span>Layanan<br>Santunan Kematian</span>
                </h5>
            </div>

            <ul class="list-unstyled component m-0">
                <li class="Dashboard">
                    <a href="dbuser" class="dashboard"><i class="material-icons">home</i>Dashboard </a>
                </li>

                <li class="Profil">
                    <a href="profil" class=""><i class="material-icons">account_circle</i>Profil</a>
                </li>

                <li class="syarat">
                    <a href="syarat" class=""><i class="material-icons">gavel</i>Syarat - syarat</a>
                </li>

                <li class="Peraturan">
                    <a href="/assets/pdf/PERWALISMS-ON.pdf" class=""><i
                            class="material-icons">account_balance</i>Peraturan Walikota</a>
                </li>

                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="material-icons">upload_file</i>Tambahkan Berkas</a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li><a href="berkasuser"><i class="material-icons">arrow_right</i>Berkas</a></li>
                    </ul>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li><a href="{{ route('upload') }}"> <i class="material-icons">arrow_right</i>Upload
                                Berkas</a></li>
                    </ul>
                </li>

                <li class="logout">
                    <a href="{{ route('actionlogout') }}" class=""><i class="material-icons">logout</i>Keluar</a>
                </li>


            </ul>
        </div>
        <div id="content">
            <div class="top-navbar navbar">

                <div class="xd-topbar">

                    <div class="row">
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                            <div class="xp-menubar">
                                <span class="material-icons text-white">signal_cellular_alt</span>
                            </div>

                        </div>

                        <div class="col-md-5 col-lg-3 order-3 order-md-2">
                            <div class="xp-searchbar">
                                <form>
                                    <div class="input-group">
                                        {{-- <input type="search" class="form-control"
                                placeholder="Search"> --}}
                                        <div class="input-group-append">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                            <div class="xp-profilebar text-right">
                                <nav class="navbar p-0">

                                    <ul class="nav navbar-nav flex-row ml-auto">
                                        <li class="dropdown nav-item">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <span class="material-icons">notifications</span>
                                            </a>
                                            {{-- <ul class="dropdown-menu">
                                   <li><a href="#">You Have New Messages</a></li>
                                </ul> --}}
                                        </li>


                                        <li class="dropdown nav-item">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <img src="/assets/img/Dhea1R.png"
                                                    style="width:40px; border-radius:50%;" />
                                                <span class="xp-user-live"></span>
                                            </a>
                                            <ul class="dropdown-menu small-menu">
                                                <li><a href="profil">
                                                        <span class="material-icons">person_outline</span>
                                                        Profile
                                                    </a></li>
                                                <li><a href="#">
                                                        <span class="material-icons">settings</span>
                                                        Settings
                                                    </a></li>
                                                <li><a href="{{ route('actionlogout') }}"><span
                                                            class="material-icons">logout</span>Keluar</a></li>

                                            </ul>
                                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!------top-navbar-end----------->


            <!------main-content-start----------->

            <div class="main-content sarat" style=" height: 650px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrapper">
                            <div class="card-header">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center"><b>No</th>
                                        <th style="text-align: center"><b>Berkas</th>
                                        <th style="text-align: center"><b>Lihat Berkas</th>
                                    </tr>
                                </thead>
                                <tbody>   
                                    <tr>
                                        <td style="text-align: center">1.</td>
                                        <td style="text-align: left">Surat pengantar dari kelurahan</td>
                                        <td style="text-align: center">
                                         <a href="/storage/{{$data->surat_pengantar}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">2.</td>
                                        <td style="text-align: left">Surat ahli waris dari kelurahan</td>
                                        <td style="text-align: center">
                                        <a href="/storage/{{$data->surat_ahwa}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">3.</td>
                                        <td style="text-align: left">Surat keterangan tidak mampu atau kartu
                                            KIS/KKS/BPJS/JAMKESDA DLL khusus untuk warga tidak mampu</td>
                                        <td style="text-align: center">
                                            <a href="/storage/{{$data->surat_tdk_mampu}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">4.</td>
                                        <td style="text-align: left">Fotocopy E-KTP yang meninggal dan Bagi anak yang belum ber E-KTP bisa diganti dengan akta kelahiran,
                                                  KIA atau surat ket.Lahir dari Bidan / Dokter.</td>
                                        <td style="text-align: center">
                                        <a href="/storage/{{$data->fc_ktp_meninggal}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">5.</td>
                                        <td style="text-align: left">Fotocopy E-KTP ahli waris</td>
                                        <td style="text-align: center">
                                           <a href="/storage/{{$data->fc_ktp_ahwa}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">6.</td>
                                        <td style="text-align: left">Fotocopy kartu keluarga Yang Meninggal</td>
                                        <td style="text-align: center">
                                            <a href="/storage/{{$data->fc_kk_meninggal}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">7.</td>
                                        <td style="text-align: left">Fotocopy akte kematian</td>
                                        <td style="text-align: center">
                                            <a href="/storage/{{$data->fc_akte_meninggal}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>                                       
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">8.</td>
                                        <td style="text-align: left">Fotocopy Kartu Keluarga Ahli Waris</td>
                                        <td style="text-align: center">
                                            <a href="/storage/{{$data->fc_kk_ahwa}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>                                       
                                    </tr>
                                </tbody>
                            </table>

                            <div class="form-group2">
                                <a href="upload">
                                    <button type="submit" class="btn btn-success" style="display: inline-block; margin-right: 10px;">Tambah Data</button>
                                </a>
                                <button type="submit" class="btn btn-success">Edit Data</button>
                            </div>

                            <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
                            <script src="/assets/js/popper.min.js"></script>
                            <script src="/assets/js/bootstrap.min.js"></script>
                            <script src="/assets/js/jquery-3.3.1.min.js"></script>


                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $(".xp-menubar").on('click', function() {
                                        $("#sidebar").toggleClass('active');
                                        $("#content").toggleClass('active');
                                    });

                                    $('.xp-menubar,.body-overlay').on('click', function() {
                                        $("#sidebar,.body-overlay").toggleClass('show-nav');
                                    });

                                });
                            </script>
</body>

</html>
