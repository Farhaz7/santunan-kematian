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
            <div class="logo-container">
         <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
        <div class="logo">
            <img src="/assets/img/bjb.png" alt="Logo" class="front-face">
            <img src="/assets/img/bjb.png" alt="Back of Logo" class="back-face">
        </div>
        </div>
    <script src="script.js"></script>
</body>
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
                        <li><a href="upload"><i class="material-icons">arrow_right</i>Upload Berkas</a></li>
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

            <div class="main-content sarat" style=" height: 730px;">



                <div class="content">
                    <h3 style="padding-bottom: 0.5rem">Data Profil</h3>
                    <div class="card card-info card-outline">
                        <div class="card-header">

                            <div class="profil-body">
                                <form action="/simpan-data/{{$user-id}}" method="post"
                                    onSubmit="return validateForm()">
                                    @METHOD('PUT')
                                    @csrf
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <div class="form-group">
                                        <input type="text" id="nik_meninggal" value="{{$user->nik_meninggal}}" name="nik_meninggal"
                                            class="form-control" placeholder="NIK yang meninggal" disabled> 
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="nama_meninggal" value="{{$user->nama_meninggal}}" name="nama_meninggal"
                                            class="form-control" placeholder="Nama yang meninggal" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" id="tgl_meninggal" value="{{$user->tgl_meninggal}}" name="tgl_meninggal"
                                            class="form-control">
                                            <br>
                                   <div class="form-group">
                                              <textarea type="text" id="alamat_meninggal" value="{{$user->alamat_meninggal}}"name="alamat_meninggal" class="form-control" placeholder="Alamat Lengkap Yang Meninggal"></textarea>
                                    </div>

                                    <div class="form-group">
                                <select id="kecamatan_meninggal" name="kecamatan_meninggal" class="form-control">
                                    <option value="" selected disabled>Pilih Kecamatan</option>
                                    <option value="Banjarbaru Selatan">Banjarbaru Selatan</option>
                                    <option value="Banjarbaru Utara">Banjarbaru Utara</option>
                                    <option value="Cempaka">Cempaka</option>
                                    <option value="Landasan Ulin">Landasan Ulin</option>
                                    <option value="Liang Anggang">Liang Anggang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="kelurahan_meninggal" name="kelurahan_meninggal" class="form-control">
                                    <option value="">Pilih Kelurahan</option>
                                </select>
                            </div>
                                    </div>
                                    <input type="text" id="notelp_ahwa" value="{{$user->notelp_ahwar}}" name="notelp_ahwa"
                                        class="form-control" placeholder="Nomor Telpon Ahli Waris">
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea type="text" id="alamat_ahwa" value="{{$user->alamat_ahwa}}"name="alamat_ahwa" class="form-control" placeholder="Alamat Lengkap Ahli Waris"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" id="nik_ahwa" value="{{$user->nik_ahwa}}" name="nik_ahwa" class="form-control"
                                    placeholder="NIK ahli waris">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nama_ahwa" value="{{$user->nama_ahwa}}"name="nama_ahwa" class="form-control"
                                    placeholder="Nama ahli waris">
                            </div>

                            <div class="form-group">
                                <select id="kecamatan_ahwa" name="kecamatan_ahwa" class="form-control">
                                    <option value="" selected disabled>Pilih Kecamatan</option>
                                    <option value="Banjarbaru Selatan">Banjarbaru Selatan</option>
                                    <option value="Banjarbaru Utara">Banjarbaru Utara</option>
                                    <option value="Cempaka">Cempaka</option>
                                    <option value="Landasan Ulin">Landasan Ulin</option>
                                    <option value="Liang Anggang">Liang Anggang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="kelurahan_ahwa" name="kelurahan_ahwa" class="form-control">
                                    <option value="">Pilih Kelurahan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="kedudukan" name="kedudukan" class="form-control">
                                    <option selected disabled>Kedudukan ahli waris</option>
                                    <option value="Saudara Kandung">Saudara Kandung</option>
                                    <option value="Anak Kandung">Anak Kandung</option>
                                    <option value="Suami">Suami</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Cucu">Cucu</option>
                                    <option value="Pilihan Lain">Pilihan Lain</option>
                                </select>
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
                            <script src="/assets/js/script.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $('#kecamatan_meninggal').change(function() {
                                        var selectedKecamatan = $(this).val();
                                        var kelurahanDropdown = $('#kelurahan_meninggal');
                                        kelurahanDropdown.empty();
                                        if (selectedKecamatan === 'Banjarbaru Selatan') {
                                            kelurahanDropdown.append('<option value="Guntung ikat">Guntung ikat</option>');
                                            kelurahanDropdown.append('<option value="Kemuning">Kemuning</option>');
                                            kelurahanDropdown.append('<option value="Loktabat Selata">Loktabat Selatan</option>');
                                            kelurahanDropdown.append('<option value="Sungai Besar">Sungai Besar</option>');
                                        } else if (selectedKecamatan === 'Banjarbaru Utara') {
                                            kelurahanDropdown.append('<option value="Komet">Komet</option>');
                                            kelurahanDropdown.append('<option value="Loktabat Utara">Loktabat Utara</option>');
                                            kelurahanDropdown.append('<option value="Mentaos">Mentaos</option>');
                                            kelurahanDropdown.append('<option value="Sungai Ulin">Sungai Ulin</option>');
                                        } else if (selectedKecamatan === 'Cempaka') {
                                            kelurahanDropdown.append('<option value="Bangkal">Bangkal</option>');
                                            kelurahanDropdown.append('<option value="Cempaka">Cempaka</option>');
                                            kelurahanDropdown.append('<option value="Palam">Palam</option>');
                                            kelurahanDropdown.append('<option value="Sungai Tiung">Sungai Tiung</option>');
                                        } else if (selectedKecamatan === 'Landasan Ulin') {
                                            kelurahanDropdown.append('<option value="Guntung Manggis">Guntung Manggis</option>');
                                            kelurahanDropdown.append('<option value="Guntung Payun">Guntung Payung</option>');
                                            kelurahanDropdown.append('<option value="Landasan Ulin Timur">Landasan Ulin Timur</option>');
                                            kelurahanDropdown.append('<option value="Syamsudin Noor">Syamsudin Noor</option>');
                                        } else if (selectedKecamatan === 'Liang Anggang') {
                                            kelurahanDropdown.append('<option value="Landasan Ulin Barat">Landasan Ulin Barat</option>');
                                            kelurahanDropdown.append('<option value="Landasan Ulin Selata">Landasan Ulin Selatan</option>');
                                            kelurahanDropdown.append('<option value="Landasan Ulin Tengah">Landasan Ulin Tengah</option>');
                                            kelurahanDropdown.append('<option value="Landasan Ulin Utara">Landasan Ulin Utara</option>');
                                        }
                                    });
                                    $('#kecamatan_ahwa').change(function() {
                                        var selectedKecamatan = $(this).val();
                                        var kelurahanDropdown = $('#kelurahan_ahwa');
                                        kelurahanDropdown.empty();
                                        if (selectedKecamatan === 'Banjarbaru Selatan') {
                                            kelurahanDropdown.append('<option value="Guntung ikat">Guntung ikat</option>');
                                            kelurahanDropdown.append('<option value="Kemuning">Kemuning</option>');
                                            kelurahanDropdown.append('<option value="Loktabat Selata">Loktabat Selatan</option>');
                                            kelurahanDropdown.append('<option value="Sungai Besar">Sungai Besar</option>');
                                        } else if (selectedKecamatan === 'Banjarbaru Utara') {
                                            kelurahanDropdown.append('<option value="Komet">Komet</option>');
                                            kelurahanDropdown.append('<option value="Loktabat Utara">Loktabat Utara</option>');
                                            kelurahanDropdown.append('<option value="Mentaos">Mentaos</option>');
                                            kelurahanDropdown.append('<option value="Sungai Ulin">Sungai Ulin</option>');
                                        } else if (selectedKecamatan === 'Cempaka') {
                                            kelurahanDropdown.append('<option value="Bangkal">Bangkal</option>');
                                            kelurahanDropdown.append('<option value="Cempaka">Cempaka</option>');
                                            kelurahanDropdown.append('<option value="Palam">Palam</option>');
                                            kelurahanDropdown.append('<option value="Sungai Tiung">Sungai Tiung</option>');
                                        } else if (selectedKecamatan === 'Landasan Ulin') {
                                            kelurahanDropdown.append('<option value="Guntung Manggis">Guntung Manggis</option>');
                                            kelurahanDropdown.append('<option value="Guntung Payun">Guntung Payung</option>');
                                            kelurahanDropdown.append('<option value="Landasan Ulin Timur">Landasan Ulin Timur</option>');
                                            kelurahanDropdown.append('<option value="Syamsudin Noor">Syamsudin Noor</option>');
                                        } else if (selectedKecamatan === 'Liang Anggang') {
                                            kelurahanDropdown.append('<option value="Landasan Ulin Barat">Landasan Ulin Barat</option>');
                                            kelurahanDropdown.append('<option value="Landasan Ulin Selata">Landasan Ulin Selatan</option>');
                                            kelurahanDropdown.append('<option value="Landasan Ulin Tengah">Landasan Ulin Tengah</option>');
                                            kelurahanDropdown.append('<option value="Landasan Ulin Utara">Landasan Ulin Utara</option>');
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
                                    var alamatMeninggal = document.getElementById("alamat_meninggal").value;
                                    var kecamatanMeninggal = document.getElementById("kecamatan_Meninggal").value;
                                    var kelurahanMeninggal = document.getElementById("kelurahan_Meninggal").value;
                                    var notelpAhwa = document.getElementById("notelp_ahwa").value;
                                    var alamatAhwa = document.getElementById("alamat_ahwa").value;
                                    var nikAhwa = document.getElementById("nik_ahwa").value;
                                    var namaAhwa = document.getElementById("nama_ahwa").value;
                                    var kecamatanAhwa = document.getElementById("kecamatan_Ahwa").value;
                                    var kelurahanAhwa = document.getElementById("kelurahan_Ahwa").value;
                                    var kedudukan = document.getElementById("kedudukan").value;

                                    if (
                                        nikMeninggal === "" ||
                                        namaMeninggal === "" ||
                                        tglMeninggal === "" ||
                                        alamatMeninggal === "" ||
                                        kecamatanMeninggal === "" ||
                                        kelurahanMeninggal === "" ||
                                        notelpAhwa === "" ||
                                        alamatAhwa === "" ||
                                        nikAhwa === "" ||
                                        namaAhwa === "" ||
                                        kecamatanAhwa === "" ||
                                        kelurahanAhwa === "" ||
                                        kedudukan === "" 
                                    ) {
                                        alert("Harap isi semua data sebelum menyimpan!");
                                        return false; // Menghentikan pengiriman formulir jika ada yang belum diisi
                                    }

                                    return true; // Mengizinkan pengiriman formulir jika semua data diisi
                                }
                            </script>
     </body>
</html>
