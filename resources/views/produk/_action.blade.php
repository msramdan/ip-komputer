<td>
    @can('produk_update')
        <a href="{{ route('produk.edit', $model->id) }}" class="btn btn-success btn-xs mb-1" title="Upload Photo Produk">
            <i class="fas fa-upload"></i>
        </a>
    @endcan

    @can('produk_update')
        <a href="{{ route('produk.edit', $model->id) }}" class="btn btn-primary btn-xs mb-1" title="Edit">
            <i class="fas fa-edit"></i>
        </a>
    @endcan

    @can('produk_delete')
        <form action="{{ route('produk.destroy', $model->id) }}" method="post" class="d-inline"
            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-xs mb-1" title="Hapus">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    @endcan
</td>
