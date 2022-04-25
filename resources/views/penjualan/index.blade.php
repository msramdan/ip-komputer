@extends('layouts.master')
@section('title', 'Data Penjualan')
@section('content')
    <div class="container-fluid">
        {{ Breadcrumbs::render('penjualan_index') }}
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Invoce</th>
                                        <th>Customer</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Subtotal</th>
                                        <th>Ongkir</th>
                                        <th>Grand Total</th>
                                        <th>Pengiriman</th>
                                        <th>Service Pengiriman</th>
                                        <th>Status Pembayaran</th>
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
                data: 'invoice',
                name: 'invoice'
            },
            {
                data: 'customer',
                name: 'customer'
            },
            {
                data: 'tanggal_pembelian',
                name: 'tanggal_pembelian'
            },
            {
                data: 'sub_total',
                name: 'sub_total'
            },
            {
                data: 'ongkir',
                name: 'onglir'
            },
            {
                data: 'grand_total',
                name: 'grand_total'
            },            {
                data: 'jasa_kirim',
                name: 'jasa_kirim'
            },
            {
                data: 'nama_service',
                name: 'nama-service'
            },
            {
                data: 'status_bayar',
                name: 'status_bayar'
            },
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
