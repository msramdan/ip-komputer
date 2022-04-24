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
                    <div class="head" style="background-color: #5A98BF; border:white"><i
                            class="icon fa fa-align-justify fa-fw"></i> <span style="color: white"></span> </div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#pembayaran" aria-controls="pembayaran"
                                    role="tab" data-toggle="tab">Menunggu Pembayaran</a></li>
                            <li role="presentation"><a href="#transaksi" aria-controls="transaksi" role="tab"
                                    data-toggle="tab">Transaksi Sukses</a></li>

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
                                                    <button class="btn btn-md btn-primary mb-1" data-toggle="modal"
                                                        data-target="#tesModal" style="float: left;margin-bottom:15px">
                                                        <i class="fa fa-eye"></i> Detail
                                                    </button>
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


<div class="modal fade" id="tesModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Transaksi Sukses</h4>
            </div>
            <div class="modal-body">
            <div class="row">
                <div id="content" class="col-sm-12">

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td class="text-left" colspan="2">Order Details</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left" style="width: 50%;"> <b>Order ID:</b> 2220510<br>
                                    <b>Tanggal Pesanan:</b> 24/04/2022
                                </td>
                                <td class="text-left" style="width: 50%;"> <b>Metode Pembayaran:</b> Cash On Delivery<br>
                                    <b>Metode Pengiriman:</b> JNE
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td class="text-left" style="width: 50%;">Alamat Pengirim :</td>
                                <td class="text-left" style="width: 50%;">Alamat Penerima :</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">Jl. pandhawa gang nakula no.02 karangmloko, RT.01/RW.17, Tegal Weru, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta</td>
                                <td class="text-left">Jl. Taman yasmin, Perumaha Blok A, No.28, Bogor, Tanah sareal</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-order">
                            <thead>
                                <tr>
                                    <td class="text-left">Nama Produk</td>
                                    <td class="text-left">Model</td>
                                    <td class="text-right">Quantity</td>
                                    <td class="text-right">Hatga</td>
                                    <td class="text-right">Total</td>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-left">T-Shirt</td>
                                    <td class="text-left">Model 76</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">Rp 75.000</td>
                                    <td class="text-right">Rp 75.000</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Sepatu</td>
                                    <td class="text-left">Ukuran 42</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">Rp 350.000</td>
                                    <td class="text-right">Rp 350.000</td>
                                </tr>
                            </tbody>

                            <tfoot>

                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-right"><b>Sub-Total</b></td>
                                    <td class="text-right">Rp 425.000</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-right"><b>Biaya Pengiriman</b></td>
                                    <td class="text-right">Rp 25.000</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-right"><b>Total</b></td>
                                    <td class="text-right">Rp 450.000</td>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                    
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection