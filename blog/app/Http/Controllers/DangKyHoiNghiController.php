<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dangKyHoiNghi;

class DangKyHoiNghiController extends Controller
{
    //
    function store(Request $request){
        $dangKyHoiNghi= new dangKyHoiNghi;
        $dangKyHoiNghi->hoVaTen=$request->get('hoVaTen');
        $dangKyHoiNghi->email=$request->get('email');
        $dangKyHoiNghi->soDienThoai = $request->get('soDienThoai');
        $dangKyHoiNghi->idHoiNghi=$request->get('idHoiNghi');
        $dangKyHoiNghi->save();
        return redirect()->back()->with('success', 'Đăng ký thành công');   
    }
}
