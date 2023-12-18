@extends('layout')

@section('content')
<div style="display: flex; justify-content: center; align-items: center; height: 15vh;">
                    <img src="/assets/img/bjb.png" style="height: 100px;" alt="Logo">
                </div>
                <h3 style="text-align: center;"><b>Persyaratan Santunan Kematian Kepada<br>Warga Kurang Mampu Kota
                        Banjarbaru</b></h3>

                <br>

                <div class="syarat-text text-left">
                    <h4><b>Persyaratan</b></h4>
                    <section style="font-size: 15px"> 1. Surat Pengantar dari Kelurahan<section>
                            <section style="font-size: 15px"> 2. Surat Ahli Waris dari Kelurahan<section>
                                    <section style="font-size: 15px"> 3. Surat keterangan tidak mampu atau Kart
                                        KIS/KKS/Jamkesda DLL Khusus warga tidak mampu.<section>
                                            <section style="font-size: 15px"> 4. Foto E-KTP yang meninggal dan Bagi anak yang belum ber E-KTP bisa diganti dengan akta kelahiran,<br> KIA atau surat keterangan Lahir dari Bidan / Dokter.
                                                <section>
                                                    <section style="font-size: 15px"> 5. Foto E-KTP Ahli waris.
                                                        <section>
                                                            <section style="font-size: 15px"> 6. Foto Kartu
                                                                Keluarga Yang Meninggal.<section>
                                                                    <section style="font-size: 15px"> 7. Foto Akte
                                                                        Kematian.<section>
																		<section style="font-size: 15px"> 8. Foto Kartu 
                                                                        Keluarga Ahli Waris.<section>
                                                                          
                </div>

                <br>

                <div class="sistem-text text-left">
                    <h4><b>Sistem, Mekanisme dan Prosedur</b></h4>
                    <section style="font-size: 15px"> 1. Warga bisa mengakses website ini dan mulai mendaftar terlebih
                        dahulu dengan format yang sudah.<section>
                            <section style="font-size: 15px"> 2. Warga dapat mengupload kelengkapan berkas permohonan
                                layanan santunan kematian dalam waktu 30 hari setelah pendaftaran.<section>
                                    <section style="font-size: 15px"> 3. Petugas akan menerima, memverifikasi dan
                                        mengagendakan berkas santunan kematian yang telah d penyerahan dana santunan
                                        kematian.<section>
                                            <section style="font-size: 15px"> 4. Petugas membuat Telaahan Staf dan
                                                daftar penerima santunan kematian.<section>
                                                    <section style="font-size: 15px"> 5. Pejabat berwenang memberikan
                                                        persetujuan pada Telaahan Staf dan daftar penerima santunan
                                                        kematian.<section>
                                                            <section style="font-size: 15px"> 6. Petugas menyerahkan
                                                                berkas, telaahan staf dan daftar penerima santunan
                                                                kematian yang telah disetujui untuk verifikasi oleh
                                                                bendahara pengeluaran guna pencairan dana santuanan
                                                                kematian.<section>
                                                                    <section style="font-size: 15px"> 7. Petugas
                                                                        menyerahkan dana santunan kematian kepada ahli
                                                                        waris.<section>
                </div>

                <br>

                <div class="waktu-text text-left">
                    <h4><b>Waktu Penyelesaian</b></h4>
                    <section style="font-size: 15px"> - Berkas diterima<section>
                            <section style="font-size: 15px"> - Berkas diverifikasi, diagendakan<section>
                                    <section style="font-size: 15px"> - Berkas dibuatkan Telaahan Staf<section>
                                            <section style="font-size: 15px"> - Apabila disetujui, diproses untuk
                                                pencairan dana santunan kematiannya<section>
                                                    <section style="font-size: 15px"> - Setelah dana santunan kematian
                                                        cair, disalurkan ke rumah ahli waris yang telah terdata Produk
                                                        Layanan<section>
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
</div> --}}
            {{-- <footer class="footer" >
		    <div class="container-fluid" style="align-content: end">
			   <div class="footer-in">
			      <p class="mb-0">&copy 2023 RaiHaz. All Rights Reserved.</p>
			   </div>
			</div>
		 </footer> --}}





        </div>

    </div>

@endsection