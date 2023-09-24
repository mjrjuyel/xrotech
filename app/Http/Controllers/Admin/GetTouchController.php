<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GetTouch;
use Session;
use carbon\carbon;
use Auth;
use Image;

class GetTouchController extends Controller
{
    public function view(){
        $edit = GetTouch::where('id','1')->first();
        return view('admin.gettouch.edit',compact('edit'));
    }
    public function update(Request $request){
        // return $request->all();
        $id=$request['id'];

        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
        ]);
        $update= GetTouch::where('id',$id)->update([
            'get_title'=>$request['title'],
            'get_sub'=>$request['sub_title'],
            'get_editor'=>Auth::user()->id,
            'created_at'=>carbon::now(),
        ]);

        if($request->hasFile('pic')){
            $image=$request->file('pic');
            $image_name='get-'.uniqId().'.'.$image->getClientOriginalExtension();

            Image::make($image)->save('uploads/admin/contact/'.$image_name);

            GetTouch::where('id',$id)->update([
                'get_pic'=>$image_name,
                'updated_at'=>Carbon::now(),
            ]);
        }

        if($update){
            Session::flash('success','Banner Data Updated ');
            return redirect()->back();
        }
    }
}
