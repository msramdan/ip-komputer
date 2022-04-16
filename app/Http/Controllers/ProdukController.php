<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Produk::with('kategori:id,nama_kategori');
            return Datatables::of($query)
                ->addIndexColumn()
                ->addColumn('kategori', function ($row) {
                    return $row->kategori->nama_kategori;
                })
                ->addColumn('action', 'produk._action')
                ->toJson();
        }
        return view('produk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.add', [
            'kategori_id' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'kode_produk' => "required|string|unique:produk,kode_produk",
                'nama' => "required|string|unique:produk,nama",
                'deskripsi' => "required|string",
                'harga' => "required|string",
                'kategori_id' => 'required|exists:kategori,id',
            ],
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        $slug = Str::slug($request->nama, '-');
        $produk = Produk::create([
            'kode_produk'   => $request->kode_produk,
            'nama'   => $request->nama,
            'slug'   => $slug,
            'deskripsi'   => $request->deskripsi,
            'harga'   => $request->harga,
            'kategori_id'   => $request->kategori_id,
            'qty'   => 0
        ]);

        if ($produk) {
            Alert::toast('Data berhasil disimpan', 'success');
            return redirect()->route('produk.index');
        } else {
            Alert::toast('Data gagal disimpan', 'error');
            return redirect()->route('produk.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $kategori = Kategori::all();
        return view('produk.edit', [
            'produk' => $produk,
            'kategori_id' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'kode_produk' => "required|string|unique:produk,kode_produk," . $produk->id,
                'nama' => "required|string|unique:produk,nama," . $produk->id,
                'deskripsi' => "required|string",
                'harga' => "required|string",
                'kategori_id' => 'required|exists:kategori,id',
            ],
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();
        try {
            $produk = produk::findOrFail($produk->id);
            $slug = Str::slug($request->nama, '-');
            $produk->update([
                'kode_produk'   => $request->kode_produk,
                'nama'   => $request->nama,
                'slug'   => $slug,
                'deskripsi'   => $request->deskripsi,
                'harga'   => $request->harga,
                'kategori_id'   => $request->kategori_id,
            ]);
            if ($produk) {
                Alert::toast('Data berhasil diupdate', 'success');
                return redirect()->route('produk.index');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::toast('Data gagal diupdate', 'error');
            return redirect()->route('produk.index');
        } finally {
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk = Produk::findOrFail($produk->id);
        $produk->delete();
        if ($produk) {
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('produk.index');
        } else {
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('produk.index');
        }
    }
}
