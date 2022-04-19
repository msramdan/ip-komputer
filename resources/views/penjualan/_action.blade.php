<td>
    @can('penjualan_detail')
        <a href="" class="btn btn-success btn-xs mb-1" title="Detail">
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
