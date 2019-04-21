<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\HoiNghi;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $HoiNghis = HoiNghi::where('trangThai','Đang mở')->get();
        return view('welcome', compact('HoiNghis'));
    }
    public function index()
    {
        if ( Auth::check() && Auth::user()->hasRole('admin') )
            return view('admin.master');
        if ( Auth::check() && Auth::user()->hasRole('nguoi_thuyet_trinh') )
            return view('nguoiThuyetTrinh.master');
        return view('home');
    }
}
