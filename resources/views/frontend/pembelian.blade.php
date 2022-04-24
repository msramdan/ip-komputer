@extends('layouts.master-frontend')
@section('title', 'Pembelian')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class='active'>Pembelian</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head" style="background-color: #5A98BF; border:white"><i class="icon fa fa-align-justify fa-fw"></i> <span style="color: white"></span> </div>
                        <nav class="yamm megamenu-horizontal" role="navigation">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#pembayaran" aria-controls="pembayaran" role="tab" data-toggle="tab">Menunggu Pembayaran</a></li>
                                <li role="presentation"><a href="#transaksi" aria-controls="transaksi" role="tab" data-toggle="tab">Transaksi Sukses</a></li>

                        </nav>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="search-result-container ">
                        <div class="tab-content category-list">
                            <div role="tabpanel" class="tab-pane active" id="pembayaran">
                                <h4>Menunggu Pembayaran</h4>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="card-title">
                                                    <a href="#">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>Belanja</span>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="card-title">
                                                    <a href="#">
                                                        <span>Bayar sebelum</span>
                                                        <i class="fa fa-clock-o"></i>
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                 <div class="card-body">
                                    <div class="row list-group-item">

                                        <div class="col-md-4">
                                            <h4>Metode Pembayaran</h4>
                                            <p>Bank Transfer</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Total Pembayaran</h4>
                                            <p>Rp. 100.000</p>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#" class="btn btn-primary">Bayar</a>
                                            <a href="#" class="btn btn-default">Batal</a>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="card-title">
                                                    <a href="#">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>Belanja</span>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="card-title">
                                                    <a href="#">
                                                        <span>Bayar sebelum</span>
                                                        <i class="fa fa-clock-o"></i>
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                 <div class="card-body">
                                    <div class="row list-group-item">

                                        <div class="col-md-4">
                                            <h4>Metode Pembayaran</h4>
                                            <p>Bank Transfer</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Total Pembayaran</h4>
                                            <p>Rp. 100.000</p>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#" class="btn btn-primary">Bayar</a>
                                            <a href="#" class="btn btn-default">Batal</a>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="transaksi">
                                <h4>Transaksi Sukses</h4>

                                <div class="card card-default">
                                    <div class="card-header">
                                        
                                    </div>
                                 <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Order Id</th>
                                                <th class="text-center">Customer</th>
                                                <th class="text-center">Jumlah</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Tanggal Pesanan</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2220510</td>
                                                <td>Heru Dwi Cahya</td>
                                                <td>2</td>
                                                <td>Lunas</td>
                                                <td>100.000</td>
                                                <td>24/04/2022</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary"> <i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                  </div>
                                </div>
                            </div>
                          </div>

                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
