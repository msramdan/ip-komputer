@extends('layouts.master-frontend')
@section('title', 'Daftar Alamat Customer')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Daftar Alamat</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head" style="background-color: #5A98BF; border:white"><i
                                class="icon fa fa-align-justify fa-fw"></i> <span style="color: white">Data Akun</span>
                        </div>
                        <nav class="yamm megamenu-horizontal" role="navigation">
                            <ul class="nav">
                                <li class=" menu-item">
                                    <a href="{{ route('setting-akun') }}">PROFILE</a>
                                </li>
                                <li class=" menu-item">
                                    <a href="{{ route('daftar-alamat') }}">DAFTAR ALAMAT</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">
                                        <a href="javascript:void(0)" class="btn btn-md btn-primary mb-1" id="createNewCustomer" style="float: left;margin:10px"> <i class="fa fa-plus"></i>
                                            TAMBAH ALAMAT</a>

                                        @foreach ($alamat as $row)
                                            <div class="col-md-6">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading"> <b>{{ $row->nama_provinsi }} -
                                                            {{ $row->nama_kota }}</b> </div>
                                                    <div class="panel-body" style="min-height: 100px; text-align:justify">
                                                        {{ $row->alamat_lengkap }}</div>
                                                    <div class="panel-footer">
                                                        <a class="btn btn-md btn-primary mb-1 updateData" style="float: left; margin-right:5px"
                                                            data-id_data="{{ $row->id }}"
                                                            data-customer_id="{{ $row->customer_id }}"
                                                            data-alamat_lengkap="{{ $row->alamat_lengkap }}"
                                                            data-provinsi_id="{{ $row->provinsi_id }}"
                                                            data-kota_id="{{ $row->kota_id }}"><i
                                                                class="fa fa-edit"></i>
                                                            EDIT</a>

                                                        <form action="{{ route('destroy-alamat', $row->id) }}"
                                                            method="post" class="d-inline"
                                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i> DELETE
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
