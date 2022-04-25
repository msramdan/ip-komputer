<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:penjualan_show')->only('index');
        $this->middleware('permission:penjualan_detail')->only('create');
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
            $query = Penjualan::with('customer:id,nama');
            return Datatables::of($query)
                ->addIndexColumn()
                ->addColumn('customer', function ($row) {
                    return $row->customer->nama;
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
        $penjualan = Penjualan::create([
            'alamat_lengkap'   => $request->alamat_lengkap
        ]);
        if ($penjualan) {
            $params = array("success" => true);
        } else {
            $params = array("success" => false);
        }
        echo json_encode($params);
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
        //
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
