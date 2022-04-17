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

    public function index()
    {
        $setting_toko = SettingToko::all()->first();
        return view('setting-toko.index', compact('setting_toko'));
    }

    public function edit(SettingToko $settingToko)
    {
        return view('setting-toko.edit',['setting_toko' => $settingToko]);
    }

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
