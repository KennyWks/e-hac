@extends('home.layouts.main')
@include('home.layouts.navbar')
@section('content')
    <div class="container mt-2">
        <div class="text-center">
            <img src="/assets/images/tambah_penduduk.jpg" width="80" height="60" class="rounded-circle"
                alt="icon tambah penduduk">
        </div>
        <div class="row">
            <div class="col-md">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" name="nik" class="form-control" id="nik"
                            placeholder="Nomor Induk Kependudukan (NIK)">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda">
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"
                                    placeholder="Tempat Lahir Anda">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir"
                                    placeholder="Tanggal Lahir Anda">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                            <option value="" selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat (*Sesuai KTP)</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rtrw">RT/RW (*Contoh 004/001)</label>
                        <input type="text" name="rtrw" class="form-control" id="rtrw" placeholder="RT/RW Anda">
                    </div>
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <select class="form-control" id="kelurahan" name="kelurahan">
                            <option value="" selected>Pilih Kelurahan</option>
                            @foreach ($kelurahan as $rKel)
                                <option value="{{ $rKel }}">{{ $rKel }}</option>
                            @endforeach
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="form-control" id="kecamatan" name="kecamatan">
                            <option value="" selected>Pilih Kecamatan</option>
                            @foreach ($kecamatan as $rKec)
                                <option value="{{ $rKec }}">{{ $rKec }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control" id="agama" name="agama">
                            <option value="" selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kepercayaan lainnya">Kepercayaan lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="" selected>Pilih Status</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <select class="form-control" id="pekerjaan" name="pekerjaan">
                            <option value="" selected>Pilih Pekerjaan</option>
                            <option value="Petani">Petani</option>
                            <option value="PNS">PNS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                            <option value="" selected>Pilih Kewarganegaraan</option>
                            <option value="WNI">Petani</option>
                            <option value="WNA">PNS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bukti_vaksin">Bukti Vaksi (File yang diterima .png/.jpg/.jpeg)</label>
                        <input type="file" class="form-control-file" name="bukti_vaksin" id="bukti_vaksin">
                    </div>
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
