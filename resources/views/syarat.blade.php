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
        <title>Syarat - Syarat</title>
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
		     <li ><a href="upload"><i class="material-icons">arrow_right</i>Upload Berkas</a></li>
		</ul>
		    </li>

            <li class="logout">
                <a href="{{route('actionlogout')}}" class=""><i class="material-icons">logout</i>Keluar</a>
            </li>



		   {{-- <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false"
		  class="dropdown-toggle">
		  <i class="material-icons">apps</i>widgets
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
		     <li><a href="#">Apps 1</a></li>
			 <li><a href="#">Apps 2</a></li>
			 <li><a href="#">Apps 3</a></li>
		  </ul>
		  </li>

		   <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false"
		  class="dropdown-toggle">
		  <i class="material-icons">equalizer</i>charts
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li>


		   <li class="dropdown">
		  <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false"
		  class="dropdown-toggle">
		  <i class="material-icons">extension</i>UI Element
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu4">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li>

		   <li class="dropdown">
		  <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false"
		  class="dropdown-toggle">
		  <i class="material-icons">border_color</i>forms
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu5">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li>

		  <li class="dropdown">
		  <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="false"
		  class="dropdown-toggle">
		  <i class="material-icons">grid_on</i>tables
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu6">
		     <li><a href="#">table 1</a></li>
			 <li><a href="#">table 2</a></li>
			 <li><a href="#">table 3</a></li>
		  </ul>
		  </li>


		  <li class="dropdown">
		  <a href="#homeSubmenu7" data-toggle="collapse" aria-expanded="false"
		  class="dropdown-toggle">
		  <i class="material-icons">content_copy</i>Pages
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu7">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li> --}}

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

               {{-- <div class="xp-breadcrumbbar text-center">
                  <h4 class="page-title">Dashboard <b>{{ Auth::user()->role }}</b></h4>
                      <div class="main-content text-center">
                          @section('konten')
                          <h5>Selamat Datang <b>{{ Auth::user()->name }}</b>, Anda Login sebagai <b>{{ Auth::user()->role }}</b>.</h5>
                          @show
                      </div>
                  </ol>
               </div> --}}


           </div>
        </div>

		  <!------top-navbar-end----------->


		   <!------main-content-start----------->

		      <div class="main-content sarat" style=" height: 708px;">
                <div style="display: flex; justify-content: center; align-items: center; height: 15vh;">
                    <img src="/assets/img/bjb.png" style="height: 100px;" alt="Logo">
                </div>
					<h3 style="text-align: center;"><b>Persyaratan Santunan Kematian Kepada<br>Warga Kurang Mampu Kota Banjarbaru</b></h3>

                <br>

                <div class="syarat-text text-left">
					<h4><b>Persyaratan</b></h4>
                    <section style="font-size: 15px"> 1. Surat Pengantar dari Kelurahan<section>
                    <section style="font-size: 15px"> 2. Surat Ahli Waris dari Kelurahan<section>
                    <section style="font-size: 15px"> 3. Surat keterangan tidak mampu atau Kart KIS/KKS/Jamkesda DLL Khusus warga tidak mampu.<section>
                    <section style="font-size: 15px"> 4. Fotocopy E-KTP yang meninggal.<section>
                    <section style="font-size: 15px"> 5. Fotocopy E-KTP Ahli waris.<section>
                    <section style="font-size: 15px"> 6. Fotocopy Kart Keluarga.<section>
                    <section style="font-size: 15px"> 7. Fotocopy Akte Kematian.<section>
                    <section style="font-size: 15px"> 8. Bagi anak yang belum ber E-KTP bisa diganti dengan aka kelahiran atau surat keterangan lahir dari bidan/dokter.<section>
                </div>

                <br>

                <div class="sistem-text text-left">
					<h4><b>Sistem, Mekanisme dan Prosedur</b></h4>
                    <section style="font-size: 15px"> 1. Warga bisa mengakses website ini dan mulai mendaftar terlebih dahulu dengan format yang sudah.<section>
                    <section style="font-size: 15px"> 2. Warga dapat mengupload kelengkapan berkas permohonan layanan santunan kematian dalam waktu 30 hari setelah pendaftaran.<section>
                    <section style="font-size: 15px"> 3. Petugas akan menerima, memverifikasi dan mengagendakan berkas santunan kematian yang telah d penyerahan dana santunan kematian.<section>
                    <section style="font-size: 15px"> 4. Petugas membuat Telaahan Staf dan daftar penerima santunan kematian.<section>
                    <section style="font-size: 15px"> 5. Pejabat berwenang memberikan persetujuan pada Telaahan Staf dan daftar penerima santunan kematian.<section>
                    <section style="font-size: 15px"> 6. Petugas menyerahkan berkas, telaahan staf dan daftar penerima santunan kematian yang telah disetujui untuk verifikasi oleh bendahara pengeluaran guna pencairan dana santuanan kematian.<section>
                    <section style="font-size: 15px"> 7. Petugas menyerahkan dana santunan kematian kepada ahli waris.<section>
                </div>

                <br>

                <div class="waktu-text text-left">
					<h4><b>Waktu Penyelesaian</b></h4>
                    <section style="font-size: 15px"> - Berkas diterima<section>
                    <section style="font-size: 15px"> - Berkas diverifikasi, diagendakan<section>
                    <section style="font-size: 15px"> - Berkas dibuatkan Telaahan Staf<section>
                    <section style="font-size: 15px"> - Apabila disetujui, diproses untuk pencairan dana santunan kematiannya<section>
                    <section style="font-size: 15px"> - Setelah dana santunan kematian cair, disalurkan ke rumah ahli waris yang telah terdata Produk Layanan<section>
                </div>
                <br>
			  </div>


                        {{-- <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper"> --}}


					   {{-- <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Manage  Employees</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add New Employees</span>
							   </a>
							   <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Delete</span>
							   </a>
							 </div>
					     </div>
					   </div>

					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="selectAll">
							 <label for="selectAll"></label></th>
							 <th>Name</th>
							 <th>Email</th>
							 <th>Address</th>
							 <th>Phone</th>
							 <th>Actions</th>
							 </tr>
						  </thead>

						  <tbody>
						      <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox1" name="option[]" value="1">
							 <label for="checkbox1"></label></th>
							 <th>Thomas Hardy</th>
							 <th>ThomasHardy@gmail.com</th>
							 <th>90r parkdground poland Usa.</th>
							 <th>(78-582552-9)</th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>


							  <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox2" name="option[]" value="1">
							 <label for="checkbox2"></label></th>
							 <th>Dominique Perrier</th>
							 <th>dominiquePerrier@gmail.com</th>
							 <th>90r ser57, Berlin poland Bermany.</th>
							 <th>(78-5235-2-9)</th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>x
							 </th>
							 </tr>


							 <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox3" name="option[]" value="1">
							 <label for="checkbox3"></label></th>
							 <th>Marai Andres</th>
							 <th>MarariAndres@gmail.com</th>
							 <th>90r ser57, Berlin poland Bermany.</th>
							 <th>(78-239-669)</th>
							 <th>
							    <a href="#edit" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>

							  <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox4" name="option[]" value="1">
							 <label for="checkbox4"></label></th>
							 <th>Vishweb Design</th>
							 <th>vishwebdesign@gmail.com</th>
							 <th> B-2 ser57 Nodia East Delhi,India.</th>
							 <th>(78-239-669)</th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>

							  <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="checkbox5" name="option[]" value="1">
							 <label for="checkbox5"></label></th>
							 <th>Vishwajeet Kumar</th>
							 <th>vishkumar234@gmail.com</th>
							 <th> B-2 ser57 Nodia East Delhi,India.</th>
							 <th>(78-555-229)</th>
							 <th>
							    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							   <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
							 </th>
							 </tr>

						  </tbody>


					   </table>

					   <div class="clearfix">
					     <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
					     <ul class="pagination">
						    <li class="page-item disabled"><a href="#">Previous</a></li>
							<li class="page-item "><a href="#"class="page-link">1</a></li>
							<li class="page-item "><a href="#"class="page-link">2</a></li>
							<li class="page-item active"><a href="#"class="page-link">3</a></li>
							<li class="page-item "><a href="#"class="page-link">4</a></li>
							<li class="page-item "><a href="#"class="page-link">5</a></li>
							<li class="page-item "><a href="#" class="page-link">Next</a></li>
						 </ul>
					   </div>









					   </div>
					</div>


									   <!----add-modal start--------->
		<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>Name</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Email</label>
			<input type="emil" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Address</label>
			<textarea class="form-control" required></textarea>
		</div>
		<div class="form-group">
		    <label>Phone</label>
			<input type="text" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Add</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->





				   <!----edit-modal start--------->
		<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>Name</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Email</label>
			<input type="emil" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Address</label>
			<textarea class="form-control" required></textarea>
		</div>
		<div class="form-group">
		    <label>Phone</label>
			<input type="text" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->


					 <!----delete-modal start--------->
		<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
		<p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Delete</button>
      </div>
    </div>
  </div>
</div>--}}
		 {{-- <footer class="footer" >
		    <div class="container-fluid" style="align-content: end">
			   <div class="footer-in">
			      <p class="mb-0">&copy 2023 RaiHaz. All Rights Reserved.</p>
			   </div>
			</div>
		 </footer> --}}





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


