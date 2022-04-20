<td>
    @can('penjualan_detail')
        <a href="javascript:void(0)" class="btn btn-success btn-xs mb-1" title="Detail" id="detailPenjualan">
            <i class="fas fa-eye"></i>
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
    </script>

