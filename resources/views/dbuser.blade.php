@extends('layout')

@section('content')
<div class="welcome text-center">
            <h5 style="font-size: 30px">Selamat Datang di Layanan SMS - ON</h5>
        </div>
        <div class="isi-text">
            @section('konten')
            <h5>Selamat Datang, Anda Login sebagai User
            </h5>
            @show
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">
                    <div class="card-header">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center"><b>Status Berkas</th>
                                    <th style="text-align: center"><b>Status Pengajuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($berkasuser as $item)
                                    <tr>
                                        @if ($item->status_berkas == '0')
                                            <th style="text-align: center">Berkas Anda Sedang Diproses</th>
                                        @elseif ($item->status_berkas == '1')
                                            <th style="text-align: center">Berkas Anda Diterima</th>
                                        @elseif ($item->status_berkas == '2')
                                            <th style="text-align: center">Berkas Anda Ada Yang Harus Perbaikan</th>
                                        @else
                                            <th style="text-align: center">Berkas Anda Ditolak</th>
                                        @endif

                                        @if ($item->status_pengajuan == '0')
                                            <th style="text-align: center">Pengajuan Anda Sedang Diproses</th>
                                        @elseif ($item->status_pengajuan == '1')
                                            <th style="text-align: center">Pengajuan Anda Dicairkan</th>
                                        @elseif ($item->status_pengajuan == '2')
                                            <th style="text-align: center">Pengajuan Anda Ada Yang Harus diperbaiki</th>
                                        @else
                                            <th style="text-align: center">Pengajuan Anda Ditolak</th>
                                        @endif
                                    </tr>
                                    <td></td>
                                @endforeach
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
@endsection
