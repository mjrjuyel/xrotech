<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use carbon\carbon;
use Session;

class AdminRoleController extends Controller
{

    public function all(){
        $allrole = Role::where('role_status','1')->latest('id')->get();
        // return $allrole;
        return view('admin.adminrole.all',compact('allrole'));
    }

    public function view($slug){
        $view = Role::Where('role_status','1')->where('role_slug',$slug)->first();
        // return $view;
        return view('admin.adminrole.view',compact('view'));
    }

    public function add(){
        return view('admin.adminrole.add');
    }
    public function insert(Request $request){
         // return $request->all();
        $this->validate($request,[
            'role'=>'required|unique:roles,role_title',
        ]);

        $insert= Role::create([
            'role_title'=>$request['role'],
            'role_slug'=>'role-'.uniqId(),
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Succesfully Register Admin Role !');
            return redirect()->route('dashboard.role');
        }
       
    }

    public function edit($slug){
        $edit=Role::where('role_status','1')->first();
        return view('admin.adminrole.edit',compact('edit'));
    }

    public function update(Request $request){

        $id = $request['id'];
        $slug = $request['slug'];
        $this->validate($request,[
            'role'=>'required|unique:roles,role_title',
        ]);

        $update= Role::where('id',$id)->update([
            'role_title'=>$request['role'],
            'role_slug'=>$slug,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Role Has been Updated !');
            return redirect('dashboard/role/view/'.$slug);
        }
    }
}
