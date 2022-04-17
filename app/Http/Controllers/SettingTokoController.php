<?php

namespace App\Http\Controllers;

use App\Models\SettingToko;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class SettingTokoController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:toko_show')->only('index');
        $this->middleware('permission:toko_create')->only('create', 'store');
        $this->middleware('permission:toko_update')->only('edit', 'update');
        $this->middleware('permission:toko_delete')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $setting_toko = SettingToko::all()->first();
        return view('setting-toko.index', compact('setting_toko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setting-toko.add');
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
                'nama_toko' => 'required|string',
                'alamat' => 'required|string',
                'telpon' => 'required|string',
                'email' => 'required|string',
                'logo' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'deskripsi' => 'required|string',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        $setting_toko = SettingToko::create([
            'nama_toko' => $request->nama_toko,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'email' => $request->email,
            'deskripsi' => $request->deskripsi,
            'logo' => $request->logo,
        ]);
        
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $name = time().'.'.$file->extension();
            $destinationPath = public_path('logo');
            $file->move($destinationPath, $name);
            $setting_toko['logo'] = $name;
        }

        if ($setting_toko) {
            Alert::toast('Data berhasil disimpan', 'success');
            return redirect()->route('setting-toko.index');
        } else {
            Alert::toast('Data gagal disimpan', 'error');
            return redirect()->route('setting-toko.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SettingToko  $settingToko
     * @return \Illuminate\Http\Response
     */
    public function show(SettingToko $settingToko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SettingToko  $settingToko
     * @return \Illuminate\Http\Response
     */
    public function edit(SettingToko $settingToko)
    {
        // $setting_toko = SettingToko::where('id', 1)->first();
        return view('setting-toko.edit',['setting_toko' => $settingToko]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SettingToko  $settingToko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SettingToko $settingToko)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_toko' => 'required|string',
                'alamat' => 'required|string',
                'telpon' => 'required|string',
                'email' => 'required|string',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'deskripsi' => 'required|string',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();

        try{
            $setting_toko = SettingToko::findOrFail($settingToko->id);
            $setting_toko->update([
                'nama_toko' => $request->nama_toko,
                'alamat' => $request->alamat,
                'telpon' => $request->telpon,
                'email' => $request->email,
                'deskripsi' => $request->deskripsi,
            ]);
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $name = time().'.'.$file->extension();
                $destinationPath = public_path('logo');
                $file->move($destinationPath, $name);
                $setting_toko['logo'] = $name;
            }

            if ($setting_toko) {
                Alert::toast('Data berhasil diupdate', 'success');
                return redirect()->route('setting-toko.index');
            }
        }catch (\Throwable $th) {
            DB::rollback();
            Alert::toast('Data gagal diupdate', 'error');
            return redirect()->route('setting-toko.index');
        }finally {
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SettingToko  $settingToko
     * @return \Illuminate\Http\Response
     */
    public function destroy(SettingToko $settingToko)
    {
        $setting_toko = SettingToko::findOrFail($settingToko->id);
        $setting_toko->delete();
        if ($setting_toko) {
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('setting-toko.index');
           }else{
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('setting-toko.index');
           }
    }
}
