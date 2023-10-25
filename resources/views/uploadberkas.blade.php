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
        <title>Upload Berkas</title>
        <style>
            .navbar {
                background-color: #359d24;
            }
            .sarat {
                background-color: #ffffff;
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
        <style>

        </style>


  </head>
  <body>
    <div class="wrapper">
	  <div class="body-overlay"></div>
	    <div id="sidebar">
	        <div class="sidebar-header">
                <div class="image-container">
                    <img src="/assets/img/bjb.png" style="height: 80px; width: 100px; text-align: center;" class="img-fluid"/>
                </div>
                <h5 style="text-align: center; font-size: 22px; white-space: nowrap; font-family: 'Bebas Neue', sans-serif;"><span>Layanan<br>Santunan Kematian</span></h5>
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
                <a href="/assets/pdf/perwalikota.pdf" class=""><i class="material-icons">account_balance</i>Peraturan Walikota</a>
            </li>

		    <li class="dropdown">
		        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="material-icons">upload_file</i>Tambahkan Berkas</a>
		<ul class="collapse list-unstyled menu" id="homeSubmenu1">
		     <li ><a href="{{route('actionlogout')}}"> <i class="material-icons">arrow_right</i>Upload Berkas</a></li>
		</ul>
		    </li>

            <li class="logout">
                <a href="{{route('actionlogout')}}" class=""><i class="material-icons">logout</i>Keluar</a>
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
                                <img src="/assets/img/Dhea1R.png" style="width:40px; border-radius:50%;"/>
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
                                  <li><a href="{{route('actionlogout')}}"><span class="material-icons">logout</span>Keluar</a></li>

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

		      <div class="main-content sarat" style=" height: 708px;">



                        <div class="content">
                            <h3>Upload Berkas</h3>
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <table class="table table-border">
                                        <div class="file-upload table-light">
                                    <p>1.Surat ahli pengantar dari kelurahan</p>
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <input  type="file" name="fileToUpload" id="fileToUpload">
                                            </form>
                                    <p>2.Surat ahli daris dari kelurahan</p>
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <input  type="file" name="fileToUpload" id="fileToUpload">
                                            </form>
                                    <p>3.Surat keterangan tidak mampu atau kartu KIS/KKS/BPJS/JAMKESDA DLL khusus untuk warga tidak mampu</p>
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <input  type="file" name="fileToUpload" id="fileToUpload">
                                            </form>
                                    <p>4.Fotocopy E-KTP yang meninggal</p>
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <input  type="file" name="fileToUpload" id="fileToUpload">
                                            </form>
                                    <p>5.Fotocopy E-KTP ahli waris</p>
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <input  type="file" name="fileToUpload" id="fileToUpload">
                                            </form>
                                    <p>6.Fotocopy kartu keluarga</p>
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <input  type="file" name="fileToUpload" id="fileToUpload">
                                            </form>
                                    <p>7.Fotocopy akte kematian</p>
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <input  type="file" name="fileToUpload" id="fileToUpload">
                                            </form>
                                    <p>8.Bagi anak yang belum ber E-KTP bisa diganti dengan akta kelahiran atau surat keterangan lahir dari bidan/dokter</p>
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <input  type="file" name="fileToUpload" id="fileToUpload">
                                            </form>
                                    <p>9.Foto ahli waris</p>
                                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                                <input  type="file" name="fileToUpload" id="fileToUpload">
                                            </form>
                                            <br><br>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Simpan Data</button>
                                            </div>

				    <div class="col-md-12">
					   <div class="table-wrapper">

	  </div>

</div>

   <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
   <script src="/assets/js/popper.min.js"></script>
   <script src="/assets/js/bootstrap.min.js"></script>
   <script src="/assets/js/jquery-3.3.1.min.js"></script>


  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });

		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });

	   });
  </script>





  </body>
</html>


