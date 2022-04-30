<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:transaksi_show')->only('index');
        $this->middleware('permission:transaksi_delete')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Transaksi::with('customer:id,nama,telpon', 'customer_alamat:id,alamat_lengkap');
            return Datatables::of($query)
                ->addIndexColumn()
                ->addColumn('customer', function ($row) {
                    return $row->customer->nama;
                })
                ->addColumn('customer_alamat', function ($row) {
                    return $row->customer_alamat->alamat_lengkap;
                })
                ->addColumn('telpon', function ($row) {
                    return $row->customer->telpon;
                })
                ->addColumn('action', 'transaksi._action')
                ->toJson();
        }

        return view('transaksi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        // return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        DB::table('transaksi')
            ->where('id', $transaksi->id)
            ->update(['no_resi' => $request->no_resi]);
        Alert::toast('No Resi berhasil di input', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi = Transaksi::findOrFail($transaksi->id);
        $transaksi->delete();
        if ($transaksi) {
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('transaksi.index');
        } else {
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('transaksi.index');
        }
    }




}
