@extends('layout')

@section('content')
<div class="welcome text-center">
            <h5 style="font-size: 30px">Selamat Datang di Layanan SMS - ON</h5>
        </div>
        <div class="isi-text">
            @section('konten')
            <h5>Selamat Datang <b>{{ Auth::user()->name }}</b>, Anda Login sebagai
                <b>{{ Auth::user()->role }}</b>.
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
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
@endsection