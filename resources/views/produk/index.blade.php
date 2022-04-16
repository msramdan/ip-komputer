@extends('layouts.master')
@section('title', 'Data produk')
@section('content')
    <div class="container-fluid">
        {{ Breadcrumbs::render('produk_index') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        @can('produk_create')
                            <a href="{{ route('produk.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>
                        @endcan

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Produk</th>
                                        <th>Nama produk</th>
                                        <th>Kategori Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>QTY</th>
                                        @canany(['produk_update', 'produk_delete'])
                                            <th>Action</th>
                                        @endcanany
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        const action =
            '{{ auth()->user()->can('produk_update') ||auth()->user()->can('produk_delete')? 'yes yes yes': '' }}'
        let columns = [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'kode_produk',
                name: 'kode_produk'
            },
            {
                data: 'nama',
                name: 'nama'
            },
            {
                data: 'kategori',
                name: 'kategori'
            },
            {
                data: 'deskripsi',
                name: 'deskripsi'
            },
            {
                data: 'harga',
                name: 'harga'
            },
            {
                data: 'qty',
                name: 'qty'
            }
        ]

        if (action) {
            columns.push({
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            })
        }

        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('produk.index') }}",
            columns: columns
        });
    </script>
@endpush
