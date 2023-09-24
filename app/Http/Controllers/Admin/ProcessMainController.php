<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProcessMain;
use Session;
use carbon\carbon;
use Auth;

class ProcessMainController extends Controller
{
    public function view(){
        $edit = ProcessMain::with('pro_type')->where('id','1')->first();
        // return $edit;
        return view('admin.process.main.edit',compact('edit'));
    }
    public function update(Request $request){
        // return $request->all();
        $id=$request['id'];
        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
        ]);
        $update= ProcessMain::where('id',$id)->update([
            'pro_main_title'=>$request['title'],
            'pro_main_subtitle'=>$request['sub_title'],
            'pro_main_editor'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Ai Process Main Has been Updated ');
            return redirect()->back();
        }
    }
}
