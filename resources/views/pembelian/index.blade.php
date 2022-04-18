@extends('layouts.master')
@section('title', 'Data pembelian')
@section('content')
    <div class="container-fluid">
        {{ Breadcrumbs::render('pembelian_index') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        @can('pembelian_create')
                            <a href="{{ route('pembelian.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>
                        @endcan

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Pembelian</th>
                                        <th>Supplier</th>
                                        <th>Tanggal</th>
                                        <th>Grand Total</th>
                                        <th>Diskon</th>
                                        <th>Total</th>
                                        <th>Status Bayar</th>
                                        @canany(['pembelian_update', 'pembelian_delete'])
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
            '{{ auth()->user()->can('pembelian_update') ||auth()->user()->can('pembelian_delete')? 'yes yes yes': '' }}'
        let columns = [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'kode_pembelian',
                name: 'kode_pembelian'
            },
            {
                data: 'supplier',
                name: 'supplier'
            },
            {
                data: 'tanggal',
                name: 'tanggal'
            },
            {
                data: 'grand_total',
                name: 'grand_total'
            },
            {
                data: 'diskon',
                name: 'diskon'
            },
            {
                data: 'total',
                name: 'total'
            },
            {
                data: 'status_bayar',
                name: 'status_bayar'
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
            ajax: "{{ route('pembelian.index') }}",
            columns: columns
        });
    </script>
@endpush
