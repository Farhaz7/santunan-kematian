@extends('layout')

@section('content')
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
                                        <td style="text-align: left">Foto E-KTP yang meninggal dan Bagi anak yang belum ber E-KTP bisa diganti dengan akta kelahiran,
                                                  KIA atau surat ket.Lahir dari Bidan / Dokter.</td>
                                        <td style="text-align: center">
                                        <a href="/storage/{{$data->fc_ktp_meninggal}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">5.</td>
                                        <td style="text-align: left">Foto E-KTP ahli waris</td>
                                        <td style="text-align: center">
                                           <a href="/storage/{{$data->fc_ktp_ahwa}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">6.</td>
                                        <td style="text-align: left">Foto kartu keluarga Yang Meninggal</td>
                                        <td style="text-align: center">
                                            <a href="/storage/{{$data->fc_kk_meninggal}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">7.</td>
                                        <td style="text-align: left">Foto akte kematian</td>
                                        <td style="text-align: center">
                                            <a href="/storage/{{$data->fc_akte_meninggal}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>                                       
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">8.</td>
                                        <td style="text-align: left">Foto Kartu Keluarga Ahli Waris</td>
                                        <td style="text-align: center">
                                            <a href="/storage/{{$data->fc_kk_ahwa}}" target="_blank" class="btn btn-success">Lihat</a>
                                        </td>                                       
                                    </tr>
                                </tbody>
                            </table>

                            <div class="form-group2">
                            <a href="upload">
                                     <button type="submit" class="btn btn-success">Edit Data</button>
                                </a>
                            </div>
@endsection