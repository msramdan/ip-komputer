@extends('layouts.master-frontend')
@section('title', 'Toko Online')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Sale</li>
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
                                @foreach ($kategori as $data)
                                    <li class="dropdown menu-item">
                                        <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">{{ $data->nama_kategori }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class='col-md-9'>
                    <div id="category" class="category-carousel hidden-xs">
                        <div class="item">
                            <div class="image">
                                <img src=" {{ asset('temp-front-end/assets/images/banners/banner.jpg') }}" alt=""
                                    class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">

                                        @foreach ($produk as $row)
                                            <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                <div class="products">

                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a
                                                                    href="{{ route('detail-produk',['id' => $row->id,'slug' =>$row->slug ]) }}"><img
                                                                        src="{{ asset('temp-front-end/assets/images/products/p1.jpg') }}"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="tag new"><span>new</span></div>
                                                        </div>
                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a
                                                                    href="{{ route('detail-produk',['id' => $row->id,'slug' =>$row->slug ]) }}">{{ $row->nama }}</a>
                                                            </h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="description"></div>
                                                            <div class="product-price">
                                                                <span class="price">{{ $row->harga }}</span>
                                                            </div>
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
                                                                            href="{{ route('detail-produk',['id' => $row->id,'slug' =>$row->slug ]) }}"
                                                                            title="Wishlist">
                                                                            <i class="icon fa fa-heart"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix filters-container">

                            <div class="text-right">
                                <div class="pagination-container">
                                    @if ($produk->hasPages())
                                        @if ($produk->lastPage() > 1)
                                            <ul class="list-inline list-unstyled">
                                                <li class="prev">
                                                    <a href="{{ $produk->url(1) }}"><i class="fa fa-angle-left"></i></a>
                                                </li>
                                                @for ($i = 1; $i <= $produk->lastPage(); $i++)
                                                    <li class="{{ ($produk->currentPage() == $i) ? ' active' : '' }}">
                                                        <a href="{{ $produk->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li class="next">
                                                    <a href="{{ $produk->url($produk->currentPage()+1) }}">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
