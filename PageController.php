<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\myumkm0535;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function masterdata()
    {
        $masterdata = myumkm0535::orderBy('id', 'desc') ->get();
        return view("masterdata", ["key" => "masterdata", "md" => $masterdata]);
    }

    public function formaddmasterdata()
    {
        return view("form-add", ["key" => "masterdata"]);
    }

    public function savemasterdata(Request $request)
    {
       $file_name = time().'-'.$request ->file('fotopenjual')->getClientOriginalName();
       $path = $request->file('fotopenjual')->storeAs('fotopenjual', $file_name, 'public');

       myumkm0535::create([

        'namapenjual'=>$request->namapenjual,
        'umurpenjual'=>$request->umurpenjual,
        'alamatpenjual'=>$request->alamatpenjual,
        'fotopenjual'=>$path
       ]);

       return redirect('/masterdata')->with('alert', 'Data Berhasil di Simpan');
    }


    public function formeditmasterdata($id)
    {
        $masterdata = myumkm0535::find($id);
        return view("form-edit", ["key" => "masterdata", "md" => $masterdata ]);
    }

    public function updatemasterdata($id, Request $request)
    {
        $masterdata = myumkm0535::find($id);
        $masterdata-> namapenjual = $request->namapenjual;
        $masterdata-> umurpenjual = $request->umurpenjual;
        $masterdata-> alamatpenjual = $request->alamatpenjual;
        if($request->fotopenjual)
        {
            if($masterdata->fotopenjual)
            {
                Storage::disk('public')->delete($masterdata->fotopenjual);
            }
            $file_name = time().'-'.$request ->file('fotopenjual')->getClientOriginalName();
            $path = $request->file('fotopenjual')->storeAs('fotopenjual', $file_name, 'public');
            $masterdata->fotopenjual = $path;
        }
            $masterdata->save();
            return redirect("/masterdata")->with('alert', 'Data Berhasil di Ubah');
    }


    public function deletemasterdata($id)
    {
        $masterdata = myumkm0535::find($id);
        if($masterdata->fotopenjual)
        {
            Storage::disk('public') -> delete($masterdata->fotopenjual);
        }

        $masterdata->delete();
        return redirect("/masterdata")->with('alert', ' Data Berhasil di Hapus');
    }

    public function login()
    {
        return view("login");
    }


    public function formedituser()
    {
        return view("formedituser", ["key" => ""]);
    }

    public function updateuser(Request $request)
    {
        if($request->password_baru == $request->konfirmasi_password)
        {
            $user = Auth::user();
            $user->password = bcrypt($request -> password_baru);
            $user->save();
            return redirect("/user")-> with("info", "Password Berhasil di Ubah");
        }

        else
        {
            return redirect("/user")->with("info", "Password Gagal di Ubah");
        }
    }

}
