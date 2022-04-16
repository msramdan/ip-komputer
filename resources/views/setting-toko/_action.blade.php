<td>
    @can('toko_update')
        <a href="{{ route('setting-toko.edit', $model->id) }}" class="btn btn-success btn-xs mb-1" title="Upload Photo setting-toko">
            <i class="fas fa-upload"></i>
        </a>
    @endcan

    @can('toko_update')
        <a href="{{ route('setting-toko.edit', $model->id) }}" class="btn btn-primary btn-xs mb-1" title="Edit">
            <i class="fas fa-edit"></i>
        </a>
    @endcan

    @can('toko_delete')
        <form action="{{ route('setting-toko.destroy', $model->id) }}" method="post" class="d-inline"
            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-xs mb-1" title="Hapus">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    @endcan
</td>
