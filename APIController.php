<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\myumkm0535;

 class APIController extends Controller
{
    public function searchmasterdata(Request $request)
    {
        $cari = $request->input('q');

        $masterdata = myumkm0535::where('namapenjual', 'LIKE', "%$cari%")->get();
        if($masterdata->isEmpty())
        {
            return response()->json([
                'success' => false,
                'data' => 'Data tidak Ditemukan'],
                 404,)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
        else
        {
            return response()->json([
                'success' => true,
                'data' => $masterdata],
                200,)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }

    }
}
