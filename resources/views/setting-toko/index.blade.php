@extends('layouts.master')
@section('title', 'Setting toko')
@section('content')
<div class="container-fluid">
    {{ Breadcrumbs::render('toko_index') }}
    <div class="card shadow mb-4">
        <div class="card-body">
            @can('supplier_create')
                <a href="{{ route('setting-toko.edit', $setting_toko->id) }}" class="btn btn-md btn-primary mb-3">Update</a>
            @endcan

            <div class="table-responsive">
                <table class="table table-bordered table-md" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Logo</th>
                            <th>
                                <img src="{{ asset('logo/' . $setting_toko->logo) }}">
                            </th>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <th>{{ $setting_toko->nama_toko }}</th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>{{ $setting_toko->email }}</th>
                        </tr>
                        <tr>
                            <th>No Telpon</th>
                            <th>{{ $setting_toko->telpon }}</th>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>{{ $setting_toko->alamat }}</th>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <th>{{ $setting_toko->deskripsi }}</th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
