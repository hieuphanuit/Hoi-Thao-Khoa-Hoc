<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baiThuyetTrinh;
use Auth;

class BaiThuyetTrinhController extends Controller
{
    //
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userId = Auth::id();
        $baiThuyetTrinhs = baiThuyetTrinh::where('idNguoiThuyetTrinh',$userId)->get();
        foreach($baiThuyetTrinhs as $baiThuyetTrinh){
            $baiThuyetTrinh->tenHoiNghi = \App\HoiNghi::find($baiThuyetTrinh->idHoiNghi)->tenHoiNghi;
        }
        return view('nguoiThuyetTrinh.baiThuyetTrinh.index', compact('baiThuyetTrinhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $hoiNghiId = $request->get('hoiNghiId');
        $hoiNghi = \App\HoiNghi::find($hoiNghiId);
        return view('nguoiThuyetTrinh.baiThuyetTrinh.create',compact('hoiNghi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $userId = Auth::id();
        $baiThuyetTrinh= new baiThuyetTrinh;
        $baiThuyetTrinh->tenBaiThuyetTrinh=$request->get('tenBaiThuyetTrinh');
        $baiThuyetTrinh->idHoiNghi=$request->get('idHoiNghi');
        $baiThuyetTrinh->idNguoiThuyetTrinh = $userId;
        $baiThuyetTrinh->moTa=$request->get('moTa');
        $baiThuyetTrinh->noiDung=$request->get('noiDung');
        $baiThuyetTrinh->doDai=$request->get('doDai');
        $baiThuyetTrinh->trangThai='Chờ phê duyệt';
        $baiThuyetTrinh->save();
        return redirect('/nguoi-thuyet-trinh/hoi-nghi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $baiThuyetTrinh = \App\baiThuyetTrinh::find($id);
        $hoiNghi = \App\HoiNghi::find($baiThuyetTrinh->idHoiNghi);
        return view('baiThuyetTrinh.show',compact('hoiNghi','baiThuyetTrinh'));
    }

    public function indexAdmin()
    {
        //
        $baiThuyetTrinhs = baiThuyetTrinh::all();
        foreach($baiThuyetTrinhs as $baiThuyetTrinh){
            $baiThuyetTrinh->tenNguoiThuyetTrinh = \App\User::find($baiThuyetTrinh->idNguoiThuyetTrinh)->name;
            $baiThuyetTrinh->tenHoiNghi = \App\HoiNghi::find($baiThuyetTrinh->idHoiNghi)->tenHoiNghi;
        }
        return view('admin.baiThuyetTrinh.index', compact('baiThuyetTrinhs'));
    }
    public function chapNhan($id){
        $baiThuyetTrinh = \App\baiThuyetTrinh::find($id);
        $baiThuyetTrinh->trangThai = "Chấp nhận";
        $baiThuyetTrinh->save();
        return redirect()->back();
    }
    public function huyChapNhan($id){
        $baiThuyetTrinh = \App\baiThuyetTrinh::find($id);
        $baiThuyetTrinh->trangThai = "Chờ phê duyệt";
        $baiThuyetTrinh->save();
        return redirect()->back();
    }
}
