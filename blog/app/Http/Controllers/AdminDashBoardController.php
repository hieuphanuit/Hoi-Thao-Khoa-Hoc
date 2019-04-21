<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminDashBoardController extends Controller
{
    //

    public function index_nguoi_thuyet_trinh()
    {
       $nguoi_thuyet_trinhs = User::whereHas('roles', function ($query) {
                                                $query->where('name', 'nguoi_thuyet_trinh');
                                            })->get();


        return view('admin.nguoiThuyetTrinh.index', compact('nguoi_thuyet_trinhs'));
    }
}
