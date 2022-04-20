<td>


    @if ($model->status_bayar == 'Sudah Bayar')
        <a href="" class="btn btn-success btn-xs mb-1 disabled" title="Edit">
            <i class="fa fa-check" aria-hidden="true"></i>
        </a>
    @else
        @can('update_pembayaran')
            <form action="{{ route('update_status_bayar', $model->id) }}" method="post" class="d-inline"
                onsubmit="return confirm('Yakin sudah melakukan pembayaran?')">
                @csrf
                @method('PUT')
                <button class="btn btn-success btn-xs mb-1" title="Update Pembayaran">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </button>
            </form>
        @endcan
    @endif

    @if ($model->status_bayar == 'Sudah Bayar')
        @can('pembelian_update')
            <a href="{{ route('pembelian.edit', $model->id) }}" class="btn btn-primary btn-xs mb-1 disabled" title="Edit">
                <i class="fas fa-edit"></i>
            </a>
        @endcan
    @else
        @can('pembelian_update')
            <a href="{{ route('pembelian.edit', $model->id) }}" class="btn btn-primary btn-xs mb-1" title="Edit">
                <i class="fas fa-edit"></i>
            </a>
        @endcan
    @endif

    @if ($model->status_bayar == 'Sudah Bayar')
        <a href="" class="btn btn-danger btn-xs mb-1 disabled" title="Edit">
            <i class="fas fa-trash-alt"></i>
        </a>
    @else
        @can('pembelian_delete')
            <form action="{{ route('pembelian.destroy', $model->id) }}" method="post" class="d-inline"
                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-xs mb-1" title="Hapus">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        @endcan
    @endif
</td>
