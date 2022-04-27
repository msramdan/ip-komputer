<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:penjualan_show')->only('index');
        $this->middleware('permission:penjualan_delete')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Penjualan::with('customer:id,nama,telpon', 'customer_alamat:id,alamat_lengkap');
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
                ->addColumn('action', 'penjualan._action')
                ->toJson();
        }

        return view('penjualan.index');
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
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        // return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        DB::table('penjualan')
            ->where('id', $penjualan->id)
            ->update(['no_resi' => $request->no_resi]);
        Alert::toast('No Resi berhasil di input', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        $penjualan = Penjualan::findOrFail($penjualan->id);
        $penjualan->delete();
        if ($penjualan) {
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('penjualan.index');
        } else {
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('penjualan.index');
        }
    }




}
