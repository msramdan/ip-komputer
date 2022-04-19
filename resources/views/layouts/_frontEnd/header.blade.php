<header class="header-style-1">
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
                        <li><a href="{{ route('wishlist') }}"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                        <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li>
                        <li><a href="{{ route('auth-web') }}"><i class="icon fa fa-lock"></i>Login</a></li>
                        <li><a href="{{ route('signin-web') }}"><i class="icon fa fa-lock"></i>Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <div class="logo">
                        <a href="home.html">
                            <img src="{{ asset('temp-front-end/assets/images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <input class="search-field" placeholder="Search here..." />
                                <a class="search-button" href="#"></a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count"><span class="count">2</span></div>
                                <div class="total-price-basket">
                                    <span class="lbl">cart -</span>
                                    <span class="total-price">
                                        <span class="sign">$</span><span class="value">600.00</span>
                                    </span>
                                </div>


                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="detail.html"><img
                                                        src="{{ asset('temp-front-end/assets/images/cart.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">

                                            <h3 class="name"><a href="index.php?page-detail">Simple
                                                    Product</a></h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix cart-total">
                                    <div class="pull-right">
                                        <span class="text">Sub Total :</span><span
                                            class='price'>$600.00</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <a href="checkout.html"
                                        class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                            class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown hidden-sm">
                                        <a href="{{ route('dashboard') }}"><span
                                                class="menu-label hot-menu hidden-xs">hot</span>SALE</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{ route('tentang-kami') }}">TENTANG KAMI</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{ route('cara-belanja') }}">CARA BELANJA</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('kontak') }}">KONTAK</a>
                                    </li>



                                </ul><!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
