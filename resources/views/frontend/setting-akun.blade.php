@extends('layouts.master-frontend')
@section('title', 'Setting Akun')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Setting Akun</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <aside class="col-lg-3 col-xl-3">
                    <nav class="nav flex-lg-column nav-pills mb-4">
                        <a class="nav-link active" href="https://chpshopq.com/order-list">
                            Daftar Transaksi
                        </a>
                        <a class="nav-link " href="https://chpshopq.com/payment-list">
                            Menunggu Pembayaran
                        </a>
                        <a class="nav-link" href="https://chpshopq.com/wishlist">Wishlist</a>

                        <a class="nav-link" href="https://chpshopq.com/logout"
                            onclick="event.preventDefault();getElementById('logout').submit();">Keluar</a>
                        <form action="https://chpshopq.com/logout" method="post" id="logout">
                            <input type="hidden" name="_token" value="3NFyCo2ELbmBhTDz1QcdUEt6u0ORXheNoT9qr3DN">
                        </form>
                    </nav>
                </aside>
                <main class="col-lg-9  col-xl-9">
                    <article class="card">
                        <div class="content-body">
                            <hr>
                            <a href="#" class="btn btn-primary"> <i class="me-2 fa fa-plus"></i> Tambah Alamat Baru </a>
                            <hr class="my-4">

                            <div>
                            </div>

                        </div>
                    </article>
                </main>
            </div>

        </div>
    @endsection
