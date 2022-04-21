<td>
    @can('penjualan_detail')
        <a href="javascript:void(0)" class="btn btn-success btn-xs mb-1" title="Detail" id="detailPenjualan">
            <i class="fas fa-eye"></i>
        </a>
    @endcan

    @can('penjualan_update')
            <a class="btn btn-md btn-primary mb-1 updateData"
            data-id_data="{{ $model->id }}"
            data-no_resi="{{ $model->no_resi }}">
            <i class="fas fa-edit"></i>
        </a>
    @endcan

    @can('penjualan_delete')
        <form action="{{ route('penjualan.destroy', $model->id) }}" method="post" class="d-inline"
            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-xs mb-1" title="Hapus">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    @endcan
</td>


<div class="modal fade" id="ajaxModelEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Nomor Resi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="form-group">
                    <label for="">No Resi</label>
                    <input class="form-control @error('no_resi') is-invalid @enderror" id="no_resi" type="text" placeholder="Masukan No. Resi" name="no_resi">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="update_data" type="button" class="btn btn-primary">Update</button>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Penjualan</th>
                                            <td>{{ $model->kode_penjualan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Customer</th>
                                            <td>{{ $model->customer->nama }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal</th>
                                            <td>{{ $model->tanggal }}</td>
                                        </tr>
                                        <tr>
                                            <th>Grand Total</th>
                                            <td>{{ $model->grand_total }}</td>
                                        </tr>
                                        <tr>
                                            <th>Diskon</th>
                                            <td>{{ $model->diskon }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td>{{ $model->total }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status Bayar</th>
                                            <td>{{ $model->status_bayar }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pengiriman</th>
                                            <td>{{ $model->pengiriman }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>{{ $model->produk->kode_produk }}</td>
                                                <td>{{ $model->produk->nama }}</td>
                                                <td>{{ $model->total }}</td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript">
        $('#detailPenjualan').click(function() {
            $('#ajaxModel').modal('show');
        });

        $('.updateData').click(function() {
                $('#ajaxModelEdit').modal('show');
                var id_data = $(this).data('id_data');
                var no_resi = $(this).data('no_resi');
                $('#id_data').val(id_data);
                $('#no_resi').val(no_resi);
        });
    </script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script>
    $("#update_data").click(function() {
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

        var no_resi = $('#no_resi').val();
        if (!no_resi) {
            toastr.error('No Resi Harus Diisi');
            $('#no_resi').focus();
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
                        url: "{{ route('penjualan.store') }}",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        data: {
                            'no_resi': no_resi
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

