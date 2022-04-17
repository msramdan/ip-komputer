@extends('layouts.master-frontend')
@section('title', 'Sign In')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Register</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-md-offset-3 create-new-account">
                        <h4 class="checkout-subtitle">
                            <div class="alert alert-success">
                                <i class="fa fa-info-circle" aria-hidden="true"></i> Create a new account
                            </div>
                        </h4>

                        <form class="register-form outer-top-xs" role="form">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                                <input style="box-shadow: 0 0 5pt 2pt #D3D3D3;
                                outline-width: 0px;" type="email" class="form-control unicase-form-control text-input"
                                    id="exampleInputEmail2">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                <input style="box-shadow: 0 0 5pt 2pt #D3D3D3;
                                outline-width: 0px;" type="email" class="form-control unicase-form-control text-input"
                                    id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                                <input style="box-shadow: 0 0 5pt 2pt #D3D3D3;
                                outline-width: 0px;" type="email" class="form-control unicase-form-control text-input"
                                    id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
                                <input style="box-shadow: 0 0 5pt 2pt #D3D3D3;
                                outline-width: 0px;" type="email" class="form-control unicase-form-control text-input"
                                    id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Confirm Password
                                    <span>*</span></label>
                                <input style="box-shadow: 0 0 5pt 2pt #D3D3D3;
                                outline-width: 0px;" type="email" class="form-control unicase-form-control text-input"
                                    id="exampleInputEmail1">
                            </div>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
                        </form>


                    </div>
                    <!-- create a new account -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection
