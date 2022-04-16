<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    @include('layouts._frontEnd.meta')
    <title>Toko Online</title>
    {{-- style --}}
    @include('layouts._frontEnd.style')

</head>

<body>
    {{-- header --}}
    @include('layouts._frontEnd.header')

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Handbags</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row'>
                <div class='col-md-3 sidebar'>
                    <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                        <nav class="yamm megamenu-horizontal" role="navigation">
                            <ul class="nav">
                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon fa fa-shopping-bag" aria-hidden="true"></i>Clothing</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Handbags</a></li>
                                                        <li><a href="#">Jwellery</a></li>
                                                        <li><a href="#">Swimwear </a></li>
                                                        <li><a href="#">Tops</a></li>
                                                        <li><a href="#">Flats</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Winter Wear</a></li>
                                                        <li><a href="#">Night Suits</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Toys &amp; Games</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">School Bags</a></li>
                                                        <li><a href="#">Lunch Box</a></li>
                                                        <li><a href="#">Footwear</a></li>
                                                        <li><a href="#">Wipes</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Sandals </a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Jwellery</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Night Dress</a></li>
                                                        <li><a href="#">Swim Wear</a></li>
                                                        <li><a href="#">Toys</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon fa fa-laptop" aria-hidden="true"></i>Electronics</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                                    <ul>
                                                        <li><a href="#">Gaming</a></li>
                                                        <li><a href="#">Laptop Skins</a></li>
                                                        <li><a href="#">Apple</a></li>
                                                        <li><a href="#">Dell</a></li>
                                                        <li><a href="#">Lenovo</a></li>
                                                        <li><a href="#">Microsoft</a></li>
                                                        <li><a href="#">Asus</a></li>
                                                        <li><a href="#">Adapters</a></li>
                                                        <li><a href="#">Batteries</a></li>
                                                        <li><a href="#">Cooling Pads</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                                    <ul>
                                                        <li><a href="#">Routers &amp; Modems</a></li>
                                                        <li><a href="#">CPUs, Processors</a></li>
                                                        <li><a href="#">PC Gaming Store</a></li>
                                                        <li><a href="#">Graphics Cards</a></li>
                                                        <li><a href="#">Components</a></li>
                                                        <li><a href="#">Webcam</a></li>
                                                        <li><a href="#">Memory (RAM)</a></li>
                                                        <li><a href="#">Motherboards</a></li>
                                                        <li><a href="#">Keyboards</a></li>
                                                        <li><a href="#">Headphones</a></li>
                                                    </ul>
                                                </div>

                                                <div class="dropdown-banner-holder">
                                                    <a href="#"><img alt=""
                                                            src="assets/images/banners/banner-side.png" /></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </li>

                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon fa fa-paw" aria-hidden="true"></i>Shoes</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Handbags</a></li>
                                                        <li><a href="#">Jwellery</a></li>
                                                        <li><a href="#">Swimwear </a></li>
                                                        <li><a href="#">Tops</a></li>
                                                        <li><a href="#">Flats</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Winter Wear</a></li>
                                                        <li><a href="#">Night Suits</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Toys &amp; Games</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">School Bags</a></li>
                                                        <li><a href="#">Lunch Box</a></li>
                                                        <li><a href="#">Footwear</a></li>
                                                        <li><a href="#">Wipes</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Sandals </a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Jwellery</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Night Dress</a></li>
                                                        <li><a href="#">Swim Wear</a></li>
                                                        <li><a href="#">Toys</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon fa fa-clock-o"></i>Watches</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                                    <ul>
                                                        <li><a href="#">Gaming</a></li>
                                                        <li><a href="#">Laptop Skins</a></li>
                                                        <li><a href="#">Apple</a></li>
                                                        <li><a href="#">Dell</a></li>
                                                        <li><a href="#">Lenovo</a></li>
                                                        <li><a href="#">Microsoft</a></li>
                                                        <li><a href="#">Asus</a></li>
                                                        <li><a href="#">Adapters</a></li>
                                                        <li><a href="#">Batteries</a></li>
                                                        <li><a href="#">Cooling Pads</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                                    <ul>
                                                        <li><a href="#">Routers &amp; Modems</a></li>
                                                        <li><a href="#">CPUs, Processors</a></li>
                                                        <li><a href="#">PC Gaming Store</a></li>
                                                        <li><a href="#">Graphics Cards</a></li>
                                                        <li><a href="#">Components</a></li>
                                                        <li><a href="#">Webcam</a></li>
                                                        <li><a href="#">Memory (RAM)</a></li>
                                                        <li><a href="#">Motherboards</a></li>
                                                        <li><a href="#">Keyboards</a></li>
                                                        <li><a href="#">Headphones</a></li>
                                                    </ul>
                                                </div>

                                                <div class="dropdown-banner-holder">
                                                    <a href="#"><img alt=""
                                                            src="assets/images/banners/banner-side.png" /></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon fa fa-diamond"></i>Jewellery</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shoes </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Sport Wear</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Handbags</a></li>
                                                        <li><a href="#">Jwellery</a></li>
                                                        <li><a href="#">Swimwear </a></li>
                                                        <li><a href="#">Tops</a></li>
                                                        <li><a href="#">Flats</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">Winter Wear</a></li>
                                                        <li><a href="#">Night Suits</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Toys &amp; Games</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                        <li><a href="#">School Bags</a></li>
                                                        <li><a href="#">Lunch Box</a></li>
                                                        <li><a href="#">Footwear</a></li>
                                                        <li><a href="#">Wipes</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">Sandals </a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Jwellery</a></li>
                                                        <li><a href="#">Bags</a></li>
                                                        <li><a href="#">Night Dress</a></li>
                                                        <li><a href="#">Swim Wear</a></li>
                                                        <li><a href="#">Toys</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon fa fa-heartbeat"></i>Health and Beauty</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                                    <ul>
                                                        <li><a href="#">Gaming</a></li>
                                                        <li><a href="#">Laptop Skins</a></li>
                                                        <li><a href="#">Apple</a></li>
                                                        <li><a href="#">Dell</a></li>
                                                        <li><a href="#">Lenovo</a></li>
                                                        <li><a href="#">Microsoft</a></li>
                                                        <li><a href="#">Asus</a></li>
                                                        <li><a href="#">Adapters</a></li>
                                                        <li><a href="#">Batteries</a></li>
                                                        <li><a href="#">Cooling Pads</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-lg-4">
                                                    <ul>
                                                        <li><a href="#">Routers &amp; Modems</a></li>
                                                        <li><a href="#">CPUs, Processors</a></li>
                                                        <li><a href="#">PC Gaming Store</a></li>
                                                        <li><a href="#">Graphics Cards</a></li>
                                                        <li><a href="#">Components</a></li>
                                                        <li><a href="#">Webcam</a></li>
                                                        <li><a href="#">Memory (RAM)</a></li>
                                                        <li><a href="#">Motherboards</a></li>
                                                        <li><a href="#">Keyboards</a></li>
                                                        <li><a href="#">Headphones</a></li>
                                                    </ul>
                                                </div>

                                                <div class="dropdown-banner-holder">
                                                    <a href="#"><img alt=""
                                                            src="assets/images/banners/banner-side.png" /></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon fa fa-paper-plane"></i>Kids and Babies</a>

                                </li>

                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon fa fa-futbol-o"></i>Sports</a>



                                </li>

                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="icon fa fa-envira"></i>Home and Garden</a>

                                </li>

                            </ul>
                        </nav>
                    </div>

                    <div class="sidebar-module-container">

                        <div class="sidebar-filter">
                            <div class="sidebar-widget wow fadeInUp">
                                <div class="widget-header">
                                    <h4 class="widget-title">Price Slider</h4>
                                </div>
                                <div class="sidebar-widget-body m-t-10">
                                    <div class="price-range-holder">
                                        <span class="min-max">
                                            <span class="pull-left">$200.00</span>
                                            <span class="pull-right">$800.00</span>
                                        </span>
                                        <input type="text" id="amount"
                                            style="border:0; color:#666666; font-weight:bold;text-align:center;">

                                        <input type="text" class="price-slider" value="">

                                    </div>
                                    <a href="#" class="lnk btn btn-primary">Show Now</a>
                                </div>
                            </div>

                            <!-- ============================================== PRODUCT TAGS ============================================== -->
                            <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
                                <h3 class="section-title">Product tags</h3>
                                <div class="sidebar-widget-body outer-top-xs">
                                    <div class="tag-list">
                                        <a class="item" title="Phone" href="category.html">Phone</a>
                                        <a class="item active" title="Vest" href="category.html">Vest</a>
                                        <a class="item" title="Smartphone"
                                            href="category.html">Smartphone</a>
                                        <a class="item" title="Furniture" href="category.html">Furniture</a>
                                        <a class="item" title="T-shirt" href="category.html">T-shirt</a>
                                        <a class="item" title="Sweatpants"
                                            href="category.html">Sweatpants</a>
                                        <a class="item" title="Sneaker" href="category.html">Sneaker</a>
                                        <a class="item" title="Toys" href="category.html">Toys</a>
                                        <a class="item" title="Rose" href="category.html">Rose</a>
                                    </div><!-- /.tag-list -->
                                </div>
                            </div>

                            <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                                <div id="advertisement" class="advertisement">
                                    <div class="item">
                                        <div class="avatar"><img src="assets/images/testimonials/member1.png"
                                                alt="Image"></div>
                                        <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem
                                            lacus port mollis. Nunc condime tum metus eud molest sed
                                            consectetuer.<em>"</em></div>
                                        <div class="clients_author">John Doe <span>Abc Company</span> </div>
                                        <!-- /.container-fluid -->
                                    </div><!-- /.item -->

                                    <div class="item">
                                        <div class="avatar"><img src="assets/images/testimonials/member3.png"
                                                alt="Image"></div>
                                        <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus
                                            port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em>
                                        </div>
                                        <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                                    </div><!-- /.item -->

                                    <div class="item">
                                        <div class="avatar"><img src="assets/images/testimonials/member2.png"
                                                alt="Image"></div>
                                        <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem
                                            lacus port mollis. Nunc condime tum metus eud molest sed
                                            consectetuer.<em>"</em></div>
                                        <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
                                        <!-- /.container-fluid -->
                                    </div><!-- /.item -->

                                </div><!-- /.owl-carousel -->
                            </div>
                            <div class="home-banner">
                                <img src="assets/images/banners/LHS-banner.jpg" alt="Image">
                            </div>

                        </div><!-- /.sidebar-filter -->
                    </div><!-- /.sidebar-module-container -->
                </div><!-- /.sidebar -->
                <div class='col-md-9'>
                    <!-- ========================================== SECTION – HERO ========================================= -->

                    <div id="category" class="category-carousel hidden-xs">
                        <div class="item">
                            <div class="image">
                                <img src=" {{ asset('temp-front-end/assets/images/banners/cat-banner-1.jpg') }}" alt="" class="img-responsive">
                            </div>
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text">
                                        Big Sale
                                    </div>

                                    <div class="excerpt hidden-sm hidden-md">
                                        Save up to 49% off
                                    </div>
                                    <div class="excerpt-normal hidden-sm hidden-md">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </div>

                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div>
                    </div>




                    <!-- ========================================= SECTION – HERO : END ========================================= -->
                    <div class="clearfix filters-container m-t-10">
                        <div class="row">
                            <div class="col col-sm-6 col-md-2">
                                <div class="filter-tabs">
                                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                        <li class="active">
                                            <a data-toggle="tab" href="#grid-container"><i
                                                    class="icon fa fa-th-large"></i>Grid</a>
                                        </li>
                                        <li><a data-toggle="tab" href="#list-container"><i
                                                    class="icon fa fa-th-list"></i>List</a></li>
                                    </ul>
                                </div><!-- /.filter-tabs -->
                            </div>
                            <div class="col col-sm-12 col-md-6">
                                <div class="col col-sm-3 col-md-6 no-padding">
                                    <div class="lbl-cnt">
                                        <span class="lbl">Sort by</span>
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                <button data-toggle="dropdown" type="button"
                                                    class="btn dropdown-toggle">
                                                    Position <span class="caret"></span>
                                                </button>

                                                <ul role="menu" class="dropdown-menu">
                                                    <li role="presentation"><a href="#">position</a></li>
                                                    <li role="presentation"><a href="#">Price:Lowest first</a></li>
                                                    <li role="presentation"><a href="#">Price:HIghest first</a></li>
                                                    <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.fld -->
                                    </div><!-- /.lbl-cnt -->
                                </div>
                                <div class="col col-sm-3 col-md-6 no-padding">
                                    <div class="lbl-cnt">
                                        <span class="lbl">Show</span>
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                <button data-toggle="dropdown" type="button"
                                                    class="btn dropdown-toggle">
                                                    1 <span class="caret"></span>
                                                </button>

                                                <ul role="menu" class="dropdown-menu">
                                                    <li role="presentation"><a href="#">1</a></li>
                                                    <li role="presentation"><a href="#">2</a></li>
                                                    <li role="presentation"><a href="#">3</a></li>
                                                    <li role="presentation"><a href="#">4</a></li>
                                                    <li role="presentation"><a href="#">5</a></li>
                                                    <li role="presentation"><a href="#">6</a></li>
                                                    <li role="presentation"><a href="#">7</a></li>
                                                    <li role="presentation"><a href="#">8</a></li>
                                                    <li role="presentation"><a href="#">9</a></li>
                                                    <li role="presentation"><a href="#">10</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.fld -->
                                    </div><!-- /.lbl-cnt -->
                                </div>
                            </div>
                            <div class="col col-sm-6 col-md-4 text-right">
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul><!-- /.list-inline -->
                                </div><!-- /.pagination-container -->
                            </div>
                        </div>
                    </div>
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p5.jpg') }}" alt=""></a>
                                                        </div>

                                                        <div class="tag new"><span>new</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p1.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag sale"><span>sale</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag hot"><span>hot</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag hot"><span>hot</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p7.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag sale"><span>sale</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p8.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag new"><span>new</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag new"><span>new</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag sale"><span>sale</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag hot"><span>hot</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag new"><span>new</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag sale"><span>sale</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->

                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="detail.html"><img
                                                                    src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt=""></a>
                                                        </div><!-- /.image -->

                                                        <div class="tag hot"><span>hot</span></div>
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html">Floral Print
                                                                Buttoned</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $450.99 </span>
                                                            <span class="price-before-discount">$ 800</span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="detail.html"
                                                                        title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                    </div>
                                </div><!-- /.category-product -->

                            </div><!-- /.tab-pane -->

                            <div class="tab-pane " id="list-container">
                                <div class="category-product">


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag new"><span>new</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag sale"><span>sale</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag hot"><span>hot</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag hot"><span>hot</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag sale"><span>sale</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag new"><span>new</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag new"><span>new</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag sale"><span>sale</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag hot"><span>hot</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag new"><span>new</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag sale"><span>sale</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                    <div class="category-product-inner wow fadeInUp">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <img src="{{ asset('temp-front-end/assets/images/products/p6.jpg') }}" alt="">
                                                            </div>
                                                        </div><!-- /.product-image -->
                                                    </div>
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="detail.html">Floral
                                                                    Print Buttoned</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="product-price">
                                                                <span class="price">
                                                                    $450.99 </span>
                                                                <span class="price-before-discount">$ 800</span>

                                                            </div><!-- /.product-price -->
                                                            <div class="description m-t-10">Suspendisse posuere arcu
                                                                diam, id accumsan eros pharetra ac. Nulla enim risus,
                                                                facilisis bibendum gravida eget, lacinia id purus.
                                                                Suspendisse posuere arcu diam, id accumsan eros pharetra
                                                                ac. Nulla enim risus, facilisis bibendum gravida eget.
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>

                                                                        </li>

                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist">
                                                                                <i class="icon fa fa-heart"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li class="lnk">
                                                                            <a class="add-to-cart"
                                                                                href="detail.html" title="Compare">
                                                                                <i class="fa fa-signal"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.action -->
                                                            </div><!-- /.cart -->

                                                        </div><!-- /.product-info -->
                                                    </div>
                                                </div><!-- /.product-list-row -->
                                                <div class="tag hot"><span>hot</span></div>
                                            </div><!-- /.product-list -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->


                                </div><!-- /.category-product -->
                            </div><!-- /.tab-pane #list-container -->
                        </div><!-- /.tab-content -->
                        <div class="clearfix filters-container">

                            <div class="text-right">
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul><!-- /.list-inline -->
                                </div><!-- /.pagination-container -->
                            </div><!-- /.text-right -->

                        </div><!-- /.filters-container -->

                    </div><!-- /.search-result-container -->

                </div>
            </div>
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">


                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div>
                        <!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->

    </div>
    {{-- footer --}}
    @include('layouts._frontEnd.footer')
    {{-- script --}}
    @include('layouts._frontEnd.script')
</body>

</html>
