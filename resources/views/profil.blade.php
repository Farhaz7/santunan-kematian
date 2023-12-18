@extends('layout')

@section('content')
<div class="content">
    <h3 style="padding-bottom: 0.5rem">Data Profil</h3>
    <div class="card card-info card-outline">
        <div class="card-header">

            <div class="profil-body">
                <form action="/simpan-data/{{Auth::user()->id}}" method="post" onSubmit="return validateForm()">
                    @METHOD('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                        <p>NIK yang meninggal :</p>
                        <input type="text" id="nik_meninggal" value="{{Auth::user()->nik_meninggal}}" name="nik_meninggal" class="form-control" placeholder="" disabled>
                    </div>
                    <div class="form-group">
                        <p>Nama yang meninggal :</p>
                        <input type="text" id="nama_meninggal" value="{{Auth::user()->nama_meninggal}}" name="nama_meninggal" class="form-control" placeholder="" disabled>
                    </div>
                    <div class="form-group">
                        <p>Tanggal Meninggal :</p>
                        <input type="date" id="tgl_meninggal" value="{{Auth::user()->tgl_meninggal}}" name="tgl_meninggal" class="form-control">
                        <br>
                        <div class="form-group">
                            <p>Alamat Lengkap Yang Meninggal :</p>
                            <textarea id="alamat_meninggal" name="alamat_meninggal" class="form-control" placeholder="">{{Auth::user()->alamat_meninggal}}</textarea>
                        </div>

                        <div class="form-group">
                            <p>Kecamatan yang meninggal :</p>
                            <select id="kecamatan_meninggal" name="kecamatan_meninggal" class="form-control">
                                <option value="" selected disabled>{{Auth::user()->kecamatan_meninggal}}</option>
                                <option value="Banjarbaru Selatan">Banjarbaru Selatan</option>
                                <option value="Banjarbaru Utara">Banjarbaru Utara</option>
                                <option value="Cempaka">Cempaka</option>
                                <option value="Landasan Ulin">Landasan Ulin</option>
                                <option value="Liang Anggang">Liang Anggang</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>Kelurahan yang meninggal :</p>
                            <select id="kelurahan_meninggal" name="kelurahan_meninggal" class="form-control">
                                <option value="">{{Auth::user()->kelurahan_meninggal}}</option>
                            </select>
                        </div>
                    </div>
                    <p>Nomor Telpon Ahli Waris :</p>
                    <input type="text" id="notelp_ahwa" name="notelp_ahwa" class="form-control" placeholder="" value="{{Auth::user()->notelp_ahwa}}">
            </div>
            <br>
            <div class="form-group">
                <p>Alamat Lengkap Ahli Waris :</p>
                <textarea id="alamat_ahwa" name="alamat_ahwa" class="form-control" placeholder="">{{Auth::user()->alamat_ahwa}}</textarea>
            </div>
            <div class="form-group">
                <p>NIK ahli waris :</p>
                <input type="text" id="nik_ahwa" value="{{Auth::user()->nik_ahwa}}" name="nik_ahwa" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <p>Nama ahli waris :</p>
                <input type="text" id="nama_ahwa" value="{{Auth::user()->nama_ahwa}}" name="nama_ahwa" class="form-control" placeholder="">
            </div>

            <div class="form-group">
                <p>Kecamatan :</p>
                <select id="kecamatan_ahwa" name="kecamatan_ahwa" class="form-control">
                    <option value="" selected disabled>{{Auth::user()->kecamatan_ahwa}}</option>
                    <option value="Banjarbaru Selatan">Banjarbaru Selatan</option>
                    <option value="Banjarbaru Utara">Banjarbaru Utara</option>
                    <option value="Cempaka">Cempaka</option>
                    <option value="Landasan Ulin">Landasan Ulin</option>
                    <option value="Liang Anggang">Liang Anggang</option>
                </select>
            </div>
            <div class="form-group">
                <p>Kelurahan :</p>
                <select id="kelurahan_ahwa" name="kelurahan_ahwa" class="form-control">
                    <option value="">{{Auth::user()->kelurahan_ahwa}}</option>
                </select>
            </div>
            <div class="form-group">
                <p>Kedudukan ahli waris :</p>
                <select id="kedudukan" name="kedudukan" class="form-control">
                    <option disabled {{ !Auth::user()->kedudukan ? 'selected' : '' }}>Kedudukan ahli waris</option>
                    <option value="Saudara Kandung" {{ Auth::user()->kedudukan === 'Saudara Kandung' ? 'selected' : '' }}>Saudara Kandung</option>
                    <option value="Anak Kandung" {{ Auth::user()->kedudukan === 'Anak Kandung' ? 'selected' : '' }}>Anak Kandung</option>
                    <option value="Suami" {{ Auth::user()->kedudukan === 'Suami' ? 'selected' : '' }}>Suami</option>
                    <option value="Istri" {{ Auth::user()->kedudukan === 'Istri' ? 'selected' : '' }}>Istri</option>
                    <option value="Cucu" {{ Auth::user()->kedudukan === 'Cucu' ? 'selected' : '' }}>Cucu</option>
                    <option value="Pilihan Lain" {{ Auth::user()->kedudukan === 'Pilihan Lain' ? 'selected' : '' }}>Pilihan Lain</option>
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
            @endsection