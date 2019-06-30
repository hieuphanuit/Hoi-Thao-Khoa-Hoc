<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    // 
    public function profile($id)
    {
        //
        $user = User::find($id);
        //if (!$HoiNghi)
        //    return redirect('/kho')->withErrors('Nguyên liệu không tồn tại');
        return view('admin.nguoiThuyetTrinh.profile', ['user' => $user]);
     }
}
