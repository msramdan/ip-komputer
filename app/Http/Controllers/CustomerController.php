<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\KotaKabupaten;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:customer_show')->only('index');
        $this->middleware('permission:customer_create')->only('create', 'store');
        $this->middleware('permission:customer_update')->only('edit', 'update');
        $this->middleware('permission:customer_delete')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Customer::query();
            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('action', 'customer._action')
                ->toJson();
        }
        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.add');
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
                'nama' => 'required|string|max:100',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required|string|max:100',
                'telpon' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|string',
            ],
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        $customer = Customer::create([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telpon' => $request->telpon,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if ($customer) {
            Alert::toast('Data berhasil disimpan', 'success');
            return redirect()->route('customer.index');
        } else {
            Alert::toast('Data gagal disimpan', 'error');
            return redirect()->route('customer.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function address(Customer $customer)
    {
        $provinsi = Provinsi::pluck('nama', 'provinsi_id');
        return view('customer.address',[
            'customer' => $customer,
            'provinsi' => $provinsi,
        ]);
    }


    public function getCities($id)
    {
        $kotaKabupaten = KotaKabupaten::where('provinsi_id', $id)->pluck('nama', 'kota_kabupaten_id');
        return response()->json($kotaKabupaten);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|string|max:100',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required|string|max:100',
                'telpon' => 'required|string',
                'email' => 'required|string',
            ],
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        DB::beginTransaction();
        try {
            $custommer = Customer::findOrFail($customer->id);
            $customer->update([
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'telpon' => $request->telpon,
                'email' => $request->email,
            ]);
            if ($custommer) {
                Alert::toast('Data berhasil diupdate', 'success');
                return redirect()->route('customer.index');
            }
        } catch (\Throwable $th) {
            DB::rollback();
            Alert::toast('Data gagal diupdate', 'error');
            return redirect()->route('customer.index');
        }finally {
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer = Customer::findOrFail($customer->id);
        $customer->delete();
        if ($customer) {
            Alert::toast('Data berhasil dihapus', 'success');
            return redirect()->route('customer.index');
        } else {
            Alert::toast('Data gagal dihapus', 'error');
            return redirect()->route('customer.index');
        }
    }
}
