<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Auth;

class DriverController extends Controller
{
    protected $tb_driver;
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->tb_driver = new Driver();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        if ($request->ajax()) {

            $search = (empty($request->input('search'))) ? '' : $request->input('search');
            $data = $this->tb_driver->select_all_driver($search);
            return Datatables::of($data)
                        ->addIndexColumn()
                        ->rawColumns(['action'])
                        ->make(true);
        }

        return view('drivers.index', compact('guard'));
    }

    public function create()
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        return view('drivers.create',compact('guard'));
    }

    public function isvalid(Request $request)
    {
        $rules = [
            'fullname' => 'required|string',
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'address' => 'required',
            'phone' => 'required|numeric',
            'level' => ['required'],
        ];

        $messages = [
            'password.min' => 'Password harus berisi minimal 8 karakter',
            'password_confirmation.same' => 'Password harus sesuai',
            'phone.numeric' => 'Nomor telepon harus berisi angka',
        ];

        $data = $request->toArray();

        $validator = Validator::make($data, $rules, $messages);

        return $validator;
    }

    public function store(Request $request)
    {
        //dd($request);
        $validator = $this->isvalid($request);

        $data = $request->toArray();

        /*if ($validator->fails()) {

            if($data['password'] == $data['password_confirmation'])
            {
                $insert = $this->tb_driver->store($data);
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {*/
            $insert = $this->tb_driver->store($data);
        //}

        if($insert)
        {
            return redirect()->route('drivers')->with('success', 'Data berhasil ditambahkan.');
        }

    }

    public function show($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $driver = $this->tb_driver->select_one($id);
        return view('drivers.detail', compact('driver','guard'));
    }
     
    public function edit($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $driver = $this->tb_driver->select_one($id);
        return view('drivers.edit', compact('driver','guard'));
    }

    public function update(Request $request, $id)
    {

        //dd($request);
        $validator = $this->isvalid($request);

        $data = $request->toArray();

        /*if ($validator->fails()) {

            if($data['password'] == $data['password_confirmation'])
            {
                $update = $this->tb_driver->modify($request, $id);
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {*/
            $update = $this->tb_driver->modify($request, $id);
        //}

        if($update)
        {
            return redirect()->route('drivers')
            ->with('success', 'Data Berhasil Diperbaharui');
        }        
    }

    public function destroy($id)
    {
        $delete = $this->tb_driver->remove($id);
        if($delete){
            return redirect()->route('drivers')
            ->with('success', 'Akun Berhasil Dihapus');
        }
        
    }

    public function check(Request $request)
    {
        //echo 'CHECK';
        $request = $request->all();
        $check = $this->tb_driver->check($request);
        return response()->json($check);
    }
}
