@extends('layouts.master')
@section('title', 'Tambah Setting Toko')
@section('content')
    <div class="container-fluid">
        {{ Breadcrumbs::render('toko-tambah') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group ">
                            <a href="{{ route('setting-toko.index') }}" class="btn btn-warning" style="float: right"><i
                                    class="fa fa-arrow-left"></i> Back</a>
                                    <br>
                        </div>
                        <form method="POST" action="{{ route('setting-toko.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <img class="img-preview d-block w-100 mb-3 col-sm-5 rounded mx-auto d-block">
                                        <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" placeholder="Masukan Logo" onchange="previewImg()">
                                        @error('logo')
                                          <div class="invalid-feedback">
                                            <span style="color: red;">{{ $message }}</span>
                                          </div>
                                        @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="nama_toko">Nama Toko</label>
                                        <input class="form-control @error('nama_toko') is-invalid @enderror" id="
                                                nama_toko" type="text" value="{{ old('nama_toko') }}" placeholder="Nama Toko"
                                            name="nama_toko" autocomplete="off">
                                        @error('nama_toko')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="
                                                                exampleFormControlInput1" type="email"
                                            value="{{ old('email') }}" placeholder="Email" name="email" autocomplete="off">
                                        @error('email')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="telpon">No Telpon</label>
                                        <input class="form-control @error('telpon') is-invalid @enderror" id="
                                        telpon" type="text" value="{{ old('telpon') }}" placeholder="No Telpon" name="telpon" autocomplete="off">
                                        @error('telpon')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat">Alamat</label>
                                        <input class="form-control @error('alamat') is-invalid @enderror" id="
                                        alamat" type="text" value="{{ old('alamat') }}" placeholder="Alamat" name="alamat" autocomplete="off">
                                        @error('alamat')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="mb-1">
                                        <label for="exampleFormControlInput1">Deskripsi</label>
                                        <textarea rows="12" class="form-control @error('deskripsi') is-invalid @enderror" id="
                                                exampleFormControlInput1" type="text" placeholder="Deskripsi"
                                            name="deskripsi">{{ old('deskripsi') }}</textarea>
                                        @error('deskripsi')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="">
                                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImg() {
          const logo = document.querySelector('#logo');
          const imgPreview = document.querySelector('.img-preview')
      
          imgPreview.style.display = 'block';
      
          const oFReader = new FileReader();
          oFReader.readAsDataURL(logo.files[0]);
      
          oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
          }
        }
      </script>
@endsection
