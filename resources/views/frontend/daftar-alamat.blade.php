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

                </div>
            </div>
        </div>
    </div>



@endsection
