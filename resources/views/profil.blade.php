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
    <title>Profil</title>
    <style>
        .navbar {
            background-color: #359d24;
        }

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
                    <a href="/assets/pdf/perwalikota.pdf" class=""><i
                            class="material-icons">account_balance</i>Peraturan Walikota</a>
                </li>

                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="material-icons">upload_file</i>Tambahkan Berkas</a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li><a href="berkasuser"><i class="material-icons">arrow_right</i>Berkas</a></li>
                    </ul>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li><a href="upload"><i class="material-icons">arrow_right</i>Upload Berkas</a></li>
                    </ul>
                </li>

                <li class="logout">
                    <a href="{{ route('actionlogout') }}" class=""><i class="material-icons">logout</i>Keluar</a>
                </li>

                <form action="{{ route('profil') }}" method="post">


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

            <div class="main-content sarat" style=" height: 730px;">



                <div class="content">
                    <h3 style="padding-bottom: 0.5rem">Data Profil</h3>
                    <div class="card card-info card-outline">
                        <div class="card-header">

                            <div class="profil-body">
                                <form action="{{ route('simpan-data') }}" method="post"
                                    onsubmit="return validateForm()">
                                    <div class="form-group">
                                        <input type="text" id="nik_meninggal" name="nik_meninggal"
                                            class="form-control" placeholder="NIK yang meninggal">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="nama_meninggal" name="nama_meninggal"
                                            class="form-control" placeholder="Nama yang meninggal">
                                    </div>
                                    <input type="date" id="tgl_meninggal" name="tgl_meninggal"
                                        class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" id="nik_ahwa" name="nik_ahwa" class="form-control"
                                    placeholder="NIK ahli waris">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nama_ahwa" name="nama_ahwa" class="form-control"
                                    placeholder="Nama ahli waris">
                            </div>

                            <div class="form-group">
                                <select id="kecamatan" name="kecamatan" class="form-control">
                                    <option value="">Pilih Kecamatan</option>
                                    <option value="Kecamatan 1">Banjarbaru Selatan</option>
                                    <option value="Kecamatan 2">Banjarbaru Utara</option>
                                    <option value="Kecamatan 3">Cempaka</option>
                                    <option value="Kecamatan 4">Landasan Ulin</option>
                                    <option value="Kecamatan 5">Liang Anggang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="kelurahan" name="kelurahan" class="form-control">
                                    <option value="">Pilih Kelurahan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" id="kedudukan" name="kedudukan" class="form-control"
                                    placeholder="Kedudukan waris">
                            </div>
                            <div class="form-group2">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                            </form>
                            <div class="col-md-12">
                                <div class="table-wrapper">
                                </div>
                            </div>
                            <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
                            <script src="/assets/js/popper.min.js"></script>
                            <script src="/assets/js/bootstrap.min.js"></script>
                            <script src="/assets/js/jquery-3.3.1.min.js"></script>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $('#kecamatan').change(function() {
                                        var selectedKecamatan = $(this).val();
                                        var kelurahanDropdown = $('#kelurahan');
                                        kelurahanDropdown.empty();
                                        if (selectedKecamatan === 'Kecamatan 1') {
                                            kelurahanDropdown.append('<option value="Kelurahan 1">Guntung ikat</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 2">Kemuning</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 4">Loktabat Selatan</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 5">Sungai Besar</option>');
                                        } else if (selectedKecamatan === 'Kecamatan 2') {
                                            kelurahanDropdown.append('<option value="Kelurahan 1">Komet</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 2">Loktabat Utara</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 3">Mentaos</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 4">Sungai Ulin</option>');
                                        } else if (selectedKecamatan === 'Kecamatan 3') {
                                            kelurahanDropdown.append('<option value="Kelurahan 1">Bangkal</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 2">Cempaka</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 3">Palam</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 4">Sungai Tiung</option>');
                                        } else if (selectedKecamatan === 'Kecamatan 4') {
                                            kelurahanDropdown.append('<option value="Kelurahan 1">Guntung Manggis</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 2">Guntung Payung</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 3">Landasan Ulin Timur</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 4">Syamsudin Noor</option>');
                                        } else if (selectedKecamatan === 'Kecamatan 5') {
                                            kelurahanDropdown.append('<option value="Kelurahan 1">Landasan Ulin Barat</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 2">Landasan Ulin Selatan</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 3">Landasan Ulin Tengah</option>');
                                            kelurahanDropdown.append('<option value="Kelurahan 4">Landasan Ulin Utara</option>');
                                        }
                                    });
                                });
                            </script>
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
                            <script>
                                function validateForm() {
                                    var nikMeninggal = document.getElementById("nik_meninggal").value;
                                    var namaMeninggal = document.getElementById("nama_meninggal").value;
                                    var tglMeninggal = document.getElementById("tgl_meninggal").value;
                                    var alamat = document.getElementById("alamat").value;
                                    var nikAhwa = document.getElementById("nik_ahwa").value;
                                    var namaAhwa = document.getElementById("nama_ahwa").value;
                                    var kecamatan = document.getElementById("kecamatan").value;
                                    var kelurahan = document.getElementById("kelurahan").value;

                                    if (
                                        nikMeninggal === "" ||
                                        namaMeninggal === "" ||
                                        tglMeninggal === "" ||
                                        alamat === "" ||
                                        nikAhwa === "" ||
                                        namaAhwa === "" ||
                                        kecamatan === "" ||
                                        kelurahan === ""
                                    ) {
                                        alert("Harap isi semua data sebelum menyimpan!");
                                        return false; // Menghentikan pengiriman formulir jika ada yang belum diisi
                                    }

                                    return true; // Mengizinkan pengiriman formulir jika semua data diisi
                                }
                            </script>
</body>

</html>
