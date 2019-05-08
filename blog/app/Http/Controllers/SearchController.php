<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoiNghi;
class SearchController extends Controller
{
   public function show(Request $request)
    {
		$name= $request['timkiemhoinghi'];
		$hoinghis = HoiNghi::where('tenHoiNghi','like','%'.$name.'%') ->orWhere ('noiDung','like','%'.$name.'%') ->get();
        return view ('search',['hoinghis' => $hoinghis]);
    }
}
