@extends('layouts.master')
@section('title', 'Data Penjualan')
@section('content')
    <div class="container-fluid">
        {{ Breadcrumbs::render('penjualan_index') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-body">

                        {{-- @can('penjualan_create')
                            <a href="{{ route('penjualan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>
                        @endcan --}}

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Penjualan</th>
                                        <th>Customer</th>
                                        <th>Tanggal</th>
                                        <th>Grand Total</th>
                                        <th>Diskon</th>
                                        <th>Total</th>
                                        <th>Status Bayar</th>
                                        <th>Pengiriman</th>
                                        @canany(['penjualan_update', 'penjualan_delete', 'penjualan_detail'])
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
                data: 'kode_penjualan',
                name: 'kode_penjualan'
            },
            {
                data: 'customer',
                name: 'customer'
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
            },
            {
                data: 'pengiriman',
                name: 'pengiriman'
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
            ajax: "{{ route('penjualan.index') }}",
            columns: columns
        });
    </script>
@endpush
