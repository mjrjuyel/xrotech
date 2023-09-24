<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AiMain;
use Session;
use carbon\carbon;
use Auth;
use Image;

class AiMainController extends Controller
{
 
    public function view(){
        $edit = AiMain::with('ai_type')->where('id','1')->first();
        // return $edit;
        return view('admin.aiservice.main.edit',compact('edit'));
    }
    public function update(Request $request){
        // return $request->all();
        $id=$request['id'];
        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
        ]);
        $update= AiMain::where('id',$id)->update([
            'ai_main_title'=>$request['title'],
            'ai_main_subtitle'=>$request['sub_title'],
            'ai_main_editor'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Ai Service Main Has been Updated ');
            return redirect()->back();
        }
    }
}
