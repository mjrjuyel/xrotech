<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ChooseMain;
use carbon\carbon;
use Image;
use Auth;
use Session;

class ChooseMainController extends Controller
{
    public function view(){
        $edit = ChooseMain::with('cho_type')->where('Cho_main_status','1')->where('id',1)->first();
        // return $edit;
        return view('admin.choose.main.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();
        $request->validate([
            'title'=>'required',
            'sub_title'=>'required'
        ]);
        $id = $request['id'];
        $slug = $request['slug'];
        $update= ChooseMain::where('id',$id)->update([
            'cho_main_title'=>$request['title'],
            'cho_main_subtitle'=>$request['sub_title'],
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

      

        if($request->hasFile('pic')){
            $image = $request->file('pic');
            $image_name='Chose-'.uniqId().'-'.'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/choose/'.$image_name);

            ChooseMain::where('id',$id)->update([
                'cho_main_pic'=>$image_name,
                'updated_at'=>carbon::now()->toDateTimeString(),
            ]);
        }

        if($update){
            Session::flash('success','Choose Main Has been Updated !');
            return redirect()->back();
        }
    }
}
