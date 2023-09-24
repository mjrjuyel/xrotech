<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use carbon\carbon;
use Session;

class UserController extends Controller
{
      
     public function all(){
        $alluser = User::latest('id')->get();
        // return $alluser;
        return view('admin.user.all',compact('alluser'));
     }
}
