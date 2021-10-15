@extends('home.layouts.main')
@include('home.layouts.navbar')
@section('content')
    <div class="container mt-2">
        <div><a class="badge badge-info p-2 text-light">Scan QR Code</a> lokasi tujuan anda.</div>
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div style="width: 100%; height:500px; background-color:rgb(73, 72, 72); border-radius:5px; margin: 10px;">
                    Peta Disini</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div style="width: 100px; height:5px; background-color:#000; border-radius:5px; margin: 10px;"></div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="#" class="text-decoration-none">
                            <img src="/assets/images/lokasi_penduduk.jpg" width="130" height="160"
                                class="rounded-circle img-thumbnail" alt="icon lokasi penduduk">
                            <h5 class="card-title mt-2">Lokasi Penduduk</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="#" class="text-decoration-none">
                            <img src="/assets/images/lokasi_penduduk_terpapar.jpg" width="130" height="160"
                                class="rounded-circle img-thumbnail" alt="icon lokasi penduduk terpapar">
                            <h5 class="card-title mt-2">Lokasi Penduduk Terpapar</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="#" class="text-decoration-none">
                            <img src="/assets/images/penduduk.jpg" width="130" height="160"
                                class="rounded-circle img-thumbnail" alt="icon jumlah penduduk">
                            <h5 class="card-title mt-2">Jumlah Penduduk</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mt-2">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="/register/people" class="text-decoration-none">
                            <img src="/assets/images/tambah_penduduk.jpg" width="130" height="160"
                                class="rounded-circle img-thumbnail" alt="icon tambah penduduk">
                            <h5 class="card-title mt-2">Tambah Penduduk</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="#" class="text-decoration-none">
                            <img src="/assets/images/testimoni.jpg" width="130" height="160"
                                class="rounded-circle img-thumbnail" alt="icon testimoni">
                            <h5 class="card-title mt-2">Testimoni</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="#" class="text-decoration-none">
                            <img src="/assets/images/layanan.jpg" width="130" height="160"
                                class="rounded-circle img-thumbnail" alt="icon layanan penduduk">
                            <h5 class="card-title mt-2">Layanan</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
