@extends('layouts.master')
@section('title', 'Alamat Customer')
@section('content')
    <div class="container-fluid">
        {{ Breadcrumbs::render('customer_index') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="form-group ">

                        <a href="{{ route('customer.index') }}" class="btn btn-warning" style="float: right;margin:10px"><i
                                class="fa fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-white card addresses-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-briefcase icofont-3x"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1"> <b>Jawa Barat - Bogor</b> </h6>
                                                <p>Perumahan SAI Residance Blok E6, Kel Tajur halang, Kec Tajur halang
                                                    Kabupaten Bogor
                                                </p>
                                                <p class="mb-0 text-black font-weight-bold">
                                                    @can('address_update')
                                                        <a class="text-primary mr-3" data-toggle="modal"
                                                            data-target="#add-address-modal" href="#"><i
                                                                class="icofont-ui-edit"></i> EDIT</a>
                                                    @endcan
                                                    @can('address_delete')
                                                        <a class="text-danger" data-toggle="modal"
                                                            data-target="#delete-address-modal" href="#"><i
                                                                class="icofont-ui-delete"></i> DELETE</a>
                                                    @endcan
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @can('address_create')
                                <div class="col-md-6">
                                    <a href="javascript:void(0)" class="btn btn-md btn-outline-success mb-1"
                                        id="createNewCustomer" style="float: left;margin:10px"> <i class="fa fa-plus"></i>
                                        TAMBAH ALAMAT</a>
                                </div>
                            @endcan


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Alamat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label class="font-weight-bold">Provinsi</label>
                            <select class="form-control provinsi-asal" id="provinsi-asal" name="province_origin">
                                <option value="0">-- pilih provinsi asal --</option>
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
                            <textarea class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script type="text/javascript">
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'firstName',
                            name: 'firstName'
                        },
                        {
                            data: 'lastName',
                            name: 'lastName'
                        },
                        {
                            data: 'info',
                            name: 'info'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });

            });
        </script>
        <script type="text/javascript">
            $('#createNewCustomer').click(function() {
                $('#saveBtn').val("create-Customer");
                $('#Customer_id').val('');
                $('#CustomerForm').trigger("reset");
                $('#modelHeading').html("Create New Customer");
                $('#ajaxModel').modal('show');
            });

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
    @endpush




@endsection
