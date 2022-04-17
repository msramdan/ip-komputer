@extends('layouts.master-frontend')
@section('title', 'Login')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-md-offset-3 col-sm-6 sign-in">
                        <h4 class="checkout-subtitle">
                            <div class="alert alert-success">
                                <i class="fa fa-info-circle" aria-hidden="true"></i> Login User
                            </div>
                        </h4>
                        <form class="register-form outer-top-xs" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input style="box-shadow: 0 0 5pt 2pt #D3D3D3;
                                    outline-width: 0px;" type="email" class="form-control unicase-form-control text-input"
                                    id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                <input style="box-shadow: 0 0 5pt 2pt #D3D3D3;
                                        outline-width: 0px;" type="password"
                                    class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                        </form>
                    </div>
                    <!-- Sign-in -->
                </div><!-- /.sigin-in-->
            </div><!-- /.container -->
        </div><!-- /.body-content -->
    @endsection
