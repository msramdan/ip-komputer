@extends('layouts.master-frontend')
@section('title', 'Cart')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row ">
                <div class="shopping-cart">
                    <div class="shopping-cart-table ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-romove item">Hapus</th>
                                        <th class="cart-description item">Photo</th>
                                        <th class="cart-product-name item">Nama Produk</th>
                                        {{-- <th class="cart-edit item">Edit</th> --}}
                                        <th class="cart-qty item">Qty</th>
                                        <th class="cart-sub-total item">Harga</th>
                                        <th class="cart-total last-item">Subtotal</th>
                                    </tr>
                                </thead>
                                <tfoot>

                                    <tr>
                                        <td colspan="7">
                                            <div class="shopping-cart-btn">
                                                <span class="">
                                                    <a href="{{ route('dashboard') }}"
                                                        class="btn btn-upper btn-primary outer-left-xs">Continue
                                                        Shopping</a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr>
                                            <td class="romove-item">
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td>
                                            <td class="cart-image">
                                                @php
                                                    $thumbnail = DB::table('produk_photo')
                                                        ->where('produk_id', $item->id)
                                                        ->first();
                                                    $slug = DB::table('produk')
                                                        ->where('id', $item->id)
                                                        ->first();
                                                @endphp
                                                <a class="entry-thumbnail"
                                                    href="{{ route('detail-produk', ['id' => $item->id, 'slug' => $slug->slug]) }}">
                                                    <img style="height: 120px"
                                                        src="{{ Storage::url('public/produk/' . $thumbnail->photo) }}"
                                                        alt="">
                                                </a>
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class='cart-product-description'><a
                                                        href="{{ route('detail-produk', ['id' => $item->id, 'slug' => $slug->slug]) }}">{{ $item->name }}</a>
                                                </h4>
                                            </td>
                                            <td class="cart-product-quantity">
                                                <form class="form-inline" action="{{ route('cart.update') }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input style="width: 80px" type="number" class="form-control"
                                                            name="quantity" value="{{ $item->quantity }}">
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class="cart-product-sub-total"><span
                                                    class="cart-sub-total-price">@currency($item->price)</span>
                                            </td>
                                            <td class="cart-product-grand-total"><span
                                                    class="cart-grand-total-price">@currency($item->price *
                                                    $item->quantity)</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div>

                    </div >
                    <div class="col-md-6 col-sm-12 estimate-ship-tax">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="info-title control-label">Country <span>*</span></label>
                                            <select class="form-control unicase-form-control selectpicker">
                                                <option>--Select options--</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title control-label">State/Province <span>*</span></label>
                                            <select class="form-control unicase-form-control selectpicker">
                                                <option>--Select options--</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title control-label">Zip/Postal Code</label>
                                            <input type="text" class="form-control unicase-form-control text-input"
                                                placeholder="">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6 col-sm-12 cart-shopping-total">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            Subtotal<span class="inner-left-md"> @currency(Cart::getTotal())</span>
                                        </div>
                                        <div class="cart-grand-total">
                                            Grand Total<span class="inner-left-md">$600.00</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn pull-right">
                                            <button type="submit" class="btn btn-primary checkout-btn">PROCCED TO
                                                CHEKOUT</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
