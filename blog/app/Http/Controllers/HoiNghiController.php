<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoiNghi;

class HoiNghiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hoiNghis = HoiNghi::all();
        return view('admin.hoiNghi.index', compact('hoiNghis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.hoiNghi.create');
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

        if($request->hasfile('hinh'))
        {
            $file = $request->file('hinh');
            $filename=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $filename);
        }
        $hoiNghi= new HoiNghi;
        $hoiNghi->tenHoiNghi=$request->get('tenHoiNghi');
        $hoiNghi->diaDiem=$request->get('diaDiem');
        $thoiGian = explode(" - ",$request->get('thoiGian'));
        $hoiNghi->thoiGianBatDau=$thoiGian[0];
        $hoiNghi->thoiGianKetThuc=$thoiGian[1];
        $hoiNghi->moTa=$request->get('moTa');
        $hoiNghi->noiDung=$request->get('noiDung');
        $hoiNghi->hinh= $filename;
        $hoiNghi->soLuongToiDa=$request->get('soLuongToiDa');
        $hoiNghi->trangThai=$request->get('trangThai');
        $hoiNghi->save();
        return redirect('admin/hoi-nghi');
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
        $baiThuyetTrinhs = \App\baiThuyetTrinh::where([['trangThai','Chấp nhận'],['idHoiNghi',$id]])->get();
        foreach($baiThuyetTrinhs as $baiThuyetTrinh){
            $baiThuyetTrinh->tenNguoiThuyetTrinh = \App\User::find($baiThuyetTrinh->idNguoiThuyetTrinh)->name;
        }
        $hoiNghi = \App\HoiNghi::find($id);
        return view('hoiNghi.show', compact('hoiNghi','baiThuyetTrinhs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $hoiNghi = HoiNghi::find($id);
        //if (!$HoiNghi)
        //    return redirect('/kho')->withErrors('Nguyên liệu không tồn tại');
        return view('admin.hoiNghi.edit', ['hoiNghi' => $hoiNghi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $hoiNghi = HoiNghi::where('id', '=', $id)->first();

        $hoiNghi->tenHoiNghi=$request->get('tenHoiNghi');;
        $hoiNghi->diaDiem=$request->get('diaDiem');
        $thoiGian = explode(" - ",$request->get('thoiGian'));
        $hoiNghi->thoiGianBatDau=$thoiGian[0];
        $hoiNghi->thoiGianKetThuc=$thoiGian[1];
        $hoiNghi->moTa=$request->get('moTa');
        $hoiNghi->noiDung=$request->get('noiDung');
        $hoiNghi->soLuongToiDa=$request->get('soLuongToiDa');
        $hoiNghi->trangThai=$request->get('trangThai');
        $hoiNghi->save();
        return redirect()->back()->with('message', 'Cập nhập thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hoiNghi = \App\HoiNghi::find($id);
        $hoiNghi->delete();
        return redirect('home/hoi-nghi')->with('success','Xóa thành công');
    }

    public function indexNguoiThuyetTrinh()
    {
        //
        $hoiNghis = HoiNghi::all();
        return view('nguoiThuyetTrinh.hoiNghi.index', compact('hoiNghis'));
    }

    public function showNguoiThuyetTrinh($id)
    {
        //
        $baiThuyetTrinhs = \App\baiThuyetTrinh::where('trangThai','Chấp nhận')->get();
        foreach($baiThuyetTrinhs as $baiThuyetTrinh){
            $baiThuyetTrinh->tenNguoiThuyetTrinh = \App\User::find($baiThuyetTrinh->idNguoiThuyetTrinh)->name;
        }
        $hoiNghi = \App\HoiNghi::find($id);
        return view('nguoiThuyetTrinh.hoiNghi.show', compact('hoiNghi','baiThuyetTrinhs'));
    }
    public function profile($id)
    {
       //
       $hoiNghi = HoiNghi::find($id);
       //if (!$HoiNghi)
       //    return redirect('/kho')->withErrors('Nguyên liệu không tồn tại');
       return view('admin.hoiNghi.profile', ['hoiNghi' => $hoiNghi]);
    }
    
}
