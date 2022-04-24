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
                                        <th class="cart-edit item">Qty</th>
                                        <th class="cart-qty item">Berat</th>
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
                                                        <button type="submit" class="btn btn-success"><i
                                                                class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class="cart-product-sub-total"><span
                                                    class="cart-sub-total-price">{{ ($slug->berat * $item->quantity) / 1000 }}
                                                    kg</span>
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

                    </div>
                    <div class="col-md-6 col-sm-12 estimate-ship-tax">
                        <table class="table">
                            @php
                                $customer = DB::table('customer')
                                    ->where('id', Session::get('id-customer'))
                                    ->first();
                            @endphp

                            <tbody>
                                <tr>
                                    <td>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="info-title control-label"> <b style="color: black">Nama
                                                        Lengkap
                                                        <span>*</span></b> </label>
                                                <input type="text" value="{{ $customer->nama }}"
                                                    class="form-control unicase-form-control text-input" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="info-title control-label"><b style="color: black">No Telpon
                                                        <span>*</span></b> </label>
                                                <input type="text" value="{{ $customer->telpon }}"
                                                    class="form-control unicase-form-control text-input" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-bottom: 15px">
                                            <label class="">Alamat Pengiriman <span
                                                    style="color: red">*</span></label>
                                            <div class="input-group">
                                                <select class="form-control" id="alat-customer" style="float: left">
                                                    <option value="" disabled selected>-- Pilih --</option>
                                                    @foreach ($alamat as $row)
                                                        <option value="{{ $row->id }}">{{ $row->nama_provinsi }} -
                                                            {{ $row->nama_kota }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="input-group-addon"> <a href="" data-toggle="modal"
                                                        data-target="#tesModal"><i class="fa fa-plus"></i> Tambah
                                                        Alamat</a> </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="nama_provinsi" class="form-control unicase-form-control text-input"
                                                    id="nama_provinsi" readonly placeholder="Provinsi" name="nama_provinsi" required="">
                                                    <input type="hidden" id="provinsi_id_des">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="nama_kota" class="form-control unicase-form-control text-input"
                                                    id="nama_kota" readonly placeholder="Alamat" name="nama_kota" required="">
                                                    <input type="hidden" id="kota_id_des">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea required="" id="alamat_lengkap" class="form-control unicase-form-control" id="deskripsi" readonly placeholder="Alamat Lengkap"
                                                    name="deskripsi"></textarea>
                                            </div>
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

    {{-- modal add --}}
    <div class="modal fade" id="tesModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Alamat</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label class="font-weight-bold">Provinsi</label>
                            <input type="hidden" id="customer_id" name="customer_id"
                                value="{{ Session::get('id-customer') }}">
                            <select class="form-control provinsi-asal" id="provinsi-asal" name="province_origin">
                                <option value="">-- Pilih --</option>
                                @foreach ($provinsi as $item => $value)
                                    <option value="{{ $item }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Kota / Kabupaten</label>
                            <select name="kota_id" id="kota_id" class="form-control  @error('kota_id') is-invalid @enderror"
                                id="exampleFormControlSelect1">
                                <option value="">-- Pilih --</option>
                            </select>
                            <span id="result"></span>
                            <div id="result_tunggu"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea class="form-control" id="alamat_lengkap" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="simpan_data" type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>
        $("#provinsi-asal").change(function() {
            var selectedValue = $(this).val();
            $.ajax({
                url: '/panel/cities/' + selectedValue,
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                data: {},
                beforeSend: function() {
                    $("#result").html("");
                    $('#kota_id').remove();
                    $("#result_tunggu").html(
                        '<p style="color:green"><blink>Tunggu sebentar</blink></p>');
                },

                success: function(html) {
                    $('#kota_id').remove();
                    $("#result").html(html);
                    $("#result_tunggu").html('');
                }
            });
        })
    </script>
    <script>
        $("#simpan_data").click(function() {
            toastr.options = {
                tapToDismiss: true,
                toastClass: 'toast',
                containerId: 'toast-container',
                debug: false,
                fadeIn: 300,
                fadeOut: 1000,
                extendedTimeOut: 1000,
                iconClass: 'toast-info',
                positionClass: 'toast-top-right',
                timeOut: 5000,
                titleClass: 'toast-title',
                messageClass: 'toast-message'
            };
            var customer_id = $('#customer_id').val();
            var provinsi_id = $('#provinsi-asal').val();
            var kota_id_cek = $('#kota_id').val();
            var alamat_lengkap = $('#alamat_lengkap').val();

            if (!provinsi_id) {
                toastr.error('Provinsi belum di pilih');
                $('#provinsi-asal').focus();
            } else if (!kota_id_cek) {
                toastr.error('Kota /  Kabupaten belum di pilih');
                $('#kota_id').focus();
            } else if (!alamat_lengkap) {
                toastr.error('Alamat lengkap belum di isi');
                $('#alamat_lengkap').focus();
            } else {
                swal.fire({
                    title: "",
                    icon: 'question',
                    text: "Yakin Simpan Data ?",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Yes, save it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: !0
                }).then(function(e) {

                    if (e.value === true) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('create-alamat') }}",
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            data: {
                                'customer_id': customer_id,
                                'provinsi_id': provinsi_id,
                                'kota_id': kota_id_cek,
                                'alamat_lengkap': alamat_lengkap
                            },
                            dataType: "json",
                            success: function(result) {
                                if (result.success == true) {
                                    swal.fire("Data berhasil di simpan", result.message,
                                        "success");
                                    setTimeout(function() {
                                        location.reload();
                                    }, 1000);


                                } else {
                                    swal.fire("Error!", 'Sumething went wrong.', "error");
                                    setTimeout(function() {
                                        location.reload();
                                    }, 1000);
                                }
                            }
                        });
                    }
                })
            }

        });
    </script>

    <script>
        $("#alat-customer").change(function() {
            $.ajax({
                url: '/ambil-alamat/' + $(this).val(),
                type: 'get',
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                success: function(data) {
                    // console.log(data.alamat_lengkap)
                    $('#nama_provinsi').val(data.nama_provinsi);
                    $('#nama_kota').val(data.nama_kota);
                    $('#alamat_lengkap').val(data.alamat_lengkap);
                    $('#provinsi_id_des').val(data.provinsi_id);
                    $('#kota_id_des').val(data.kota_id);
                }
            });
        })

    </script>
@endpush
