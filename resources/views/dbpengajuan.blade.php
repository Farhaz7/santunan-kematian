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
    <title>Data Pengajuan</title>
    <style>
        .sarat {
            background-color: #f3f3f3;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <div id="sidebar">
            <div class="sidebar-header">
            <html lang="en">
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
</html>
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
                <li class="active">
                    <a href="dbadmin" class="dashboard"><i class="material-icons">home</i>Dashboard </a>
                </li>

                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="material-icons">dataset</i>Data</a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li><a href="{{route('dbpengajuan')}}"><i class="material-icons">arrow_right</i>Data Pengajuan</a></li>
                        <li><a href="{{route('dbdapatsantunan')}}"><i class="material-icons">arrow_right</i>Data Dapat Santunan</a></li>
                    </ul>
                </li>

                <li class="logout">
                    <a href="{{ route('actionlogout') }}" class=""><i class="material-icons">logout</i>Keluar</a>
                </li>

            </ul>
        </div>
        <div id="content">
            <div class="top-navbar">

                <div class="xd-topbar">

                    <div class="row">
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                            <div class="xp-menubar">
                                <span class="material-icons text-white">signal_cellular_alt</span>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-3 order-3 order-md-2">
                            <div class="xp-searchbar">
                               
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
                                            <ul class="dropdown-menu">
                                                <li><a href="#">You Have New Messages</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <span class="material-icons">question_answer</span>
                                            </a>
                                        </li>

                                        <li class="dropdown nav-item">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <img src="img/user.jpg" style="width:40px; border-radius:50%;" />
                                                <span class="xp-user-live"></span></a>
                                            <ul class="dropdown-menu small-menu">
                                                <li><a href="#"><span class="material-icons">settings</span>Settings</a></li>
                                                <li><a href="{{ route('actionlogout') }}"><span class="material-icons">logout</span>Keluar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="main-content sarat" style=" height: 708px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="xp-breadcrumbbar text-center">
                            {{-- <h4 class="page-title">Dashboard Admin</h4> --}}
                            <div class="main-content text-center">
                                @section('konten')
                                    <h5>Selamat Datang <b>{{ Auth::user()->name }}</b>, Anda sebagai
                                        <b>{{ Auth::user()->role }}</b>, Berhak menyetujui Berkas User.
                                    </h5>
                                @show
                            </div>
                            </ol>
                        </div>
                        <div class="table-wrapper">
                            <div class="content">
                                <h4 style="background-color: #f3f3f3; padding: 10px; margin: 0; border-radius: 0px;"><i class="material-icons">dataset</i>Data Pengajuan</h4>
                                <div class="card card-info card-outline">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center"><b>N.Y Meninggal</th>
                                                        <th style="text-align: center"><b>SP Dari Kelurahan</th>
                                                        <th style="text-align: center"><b>S.Ahwa dari kelurahan</th>
                                                        <th style="text-align: center"><b>SK tidak mampu atau kartu KIS/KKS/BPJS/JAMKESDA DLL</th>
                                                        <th style="text-align: center"><b>FC E-KTP yang meninggal</th>
                                                        <th style="text-align: center"><b>FC E-KTP ahli waris</th>
                                                        <th style="text-align: center"><b>FC kartu keluarga</th>
                                                        <th style="text-align: center"><b>FC akte kematian</th>
                                                        <th style="text-align: center"><b>Bagi anak yang belum ber-KTP|akte kelahiran atau surat keterangan lahir dari bidan/dokter</th>
                                                        <th style="text-align: center"><b>Foto ahli waris</th>
                                                        <th style="text-align: center"><b>Status(Lengkap/Tidak)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><div class="button-container"> <button id="yaButton" class="btn btn-primary">Ya</button> <button id="tidakButton" class="btn btn-danger">Tidak</button></div></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div >
                                    </div>
                                </div>
                            </div>
                        </div>
                    <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
                    <script src="/assets/js/popper.min.js"></script>
                    <script src="/assets/js/bootstrap.min.js"></script>
                    <script src="/assets/js/jquery-3.3.1.min.js"></script>
                    <script src="/assets/js/script.js"></script>
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
