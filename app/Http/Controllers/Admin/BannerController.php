<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Session;
use carbon\carbon;
use Auth;
use Image;

class BannerController extends Controller
{
    public function view(){
        $edit = Banner::where('id','1')->first();
        return view('admin.banner.edit',compact('edit'));
    }
    public function update(Request $request){
        // return $request->all();
        $id=$request['id'];

        $update= Banner::where('id',$id)->update([
            'ban_title'=>$request['ban_title'],
            'ban_btn'=>$request['btn'],
            'ban_editor'=>Auth::user()->id,
            'created_at'=>carbon::now(),
        ]);

        if($request->hasFile('ban_pic')){
            $image=$request->file('ban_pic');
            $image_name='ban-'.uniqId().'.'.$image->getClientOriginalExtension();

            Image::make($image)->save('uploads/admin/banner/'.$image_name);

            Banner::where('id',$id)->update([
                'ban_pic'=>$image_name,
                'updated_at'=>Carbon::now(),
            ]);
        }

        if($update){
            Session::flash('success','Banner Data Updated ');
            return redirect()->back();
        }
    }
}
