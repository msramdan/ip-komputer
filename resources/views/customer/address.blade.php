@extends('layouts.master')
@section('title', 'Alamat Customer')
@section('content')
    <div class="container-fluid">
        {{ Breadcrumbs::render('customer_index') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="form-group ">

                        <a href="{{ route('customer.index') }}" class="btn btn-warning" style="float: right;margin:10px"><i
                                class="fa fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-white card addresses-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-briefcase icofont-3x"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1"> <b>Jawa Barat - Bogor</b> </h6>
                                                <p>Perumahan SAI Residance Blok E6, Kel Tajur halang, Kec Tajur halang
                                                    Kabupaten Bogor
                                                </p>
                                                <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3"
                                                        data-toggle="modal" data-target="#add-address-modal" href="#"><i
                                                            class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger"
                                                        data-toggle="modal" data-target="#delete-address-modal" href="#"><i
                                                            class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white card addresses-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-briefcase icofont-3x"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1"> <b>Jawa Barat - Bandung</b> </h6>
                                                <p>NCC, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab 141002,
                                                    India
                                                </p>
                                                <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3"
                                                        data-toggle="modal" data-target="#add-address-modal" href="#"><i
                                                            class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger"
                                                        data-toggle="modal" data-target="#delete-address-modal" href="#"><i
                                                            class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('customer.create') }}" class="btn btn-md btn-outline-success mb-1"
                                    style="float: left;margin:10px"> <i class="fa fa-plus"></i> TAMBAH ALAMAT</a>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
