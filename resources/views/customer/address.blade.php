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
                                                <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3"
                                                        data-toggle="modal" data-target="#add-address-modal" href="#"><i
                                                            class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger"
                                                        data-toggle="modal" data-target="#delete-address-modal" href="#"><i
                                                            class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white card addresses-item mb-4 shadow-sm">
                                    <div class="gold-members p-4">
                                        <div class="media">
                                            <div class="mr-3"><i class="icofont-briefcase icofont-3x"></i></div>
                                            <div class="media-body">
                                                <h6 class="mb-1"> <b>Jawa Barat - Bandung</b> </h6>
                                                <p>NCC, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab 141002,
                                                    India
                                                </p>
                                                <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3"
                                                        data-toggle="modal" data-target="#add-address-modal" href="#"><i
                                                            class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger"
                                                        data-toggle="modal" data-target="#delete-address-modal" href="#"><i
                                                            class="icofont-ui-delete"></i> DELETE</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="javascript:void(0)" class="btn btn-md btn-outline-success mb-1" id="createNewCustomer"
                                    style="float: left;margin:10px"> <i class="fa fa-plus"></i> TAMBAH ALAMAT</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade"  id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                            <label for="">Provinsi</label>
                            <select class="form-control" id="">
                                <option value="">Pilih Provinsi</option>
                                <option value="">Jawa Barat</option>
                                <option value="">Jawa Tengah</option>
                                <option value="">Jawa Timur</option>
                                <option value="">Jawa Timur</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kota</label>
                            <select class="form-control" id="">
                                <option value="">Pilih Kota</option>
                                <option value="">Bandung</option>
                                <option value="">Bogor</option>
                                <option value="">Jakarta</option>
                                <option value="">Jakarta</option>
                            </select>
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


    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
          });
          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "",
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'firstName', name: 'firstName'},
                  {data: 'lastName', name: 'lastName'},
                  {data: 'info', name: 'info'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });
          $('#createNewCustomer').click(function () {
              $('#saveBtn').val("create-Customer");
              $('#Customer_id').val('');
              $('#CustomerForm').trigger("reset");
              $('#modelHeading').html("Create New Customer");
              $('#ajaxModel').modal('show');
          });
          $('body').on('click', '.editCustomer', function () {
            var Customer_id = $(this).data('id');
            $.get("" +'/' + Customer_id +'/edit', function (data) {
                $('#modelHeading').html("Edit Customer");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#Customer_id').val(data.id);
                $('#name').val(data.name);
                $('#detail').val(data.detail);
            })
         });
          $('#saveBtn').click(function (e) {
              e.preventDefault();
              $(this).html('Sending..');
              $.ajax({
                data: $('#CustomerForm').serialize(),
                url: "",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#CustomerForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
          });
          $('body').on('click', '.deleteCustomer', function () {
              var Customer_id = $(this).data("id");
              confirm("Are You sure want to delete !");
              $.ajax({
                  type: "DELETE",
                  url: ""+'/'+Customer_id,
                  success: function (data) {
                      table.draw();
                  },
                  error: function (data) {
                      console.log('Error:', data);
                  }
              });
          });
        });
      </script>
@endsection


