<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Basic;
use carbon\carbon;
use Image;
use Auth;
use Session;

class BasicController extends Controller
{ 

    public function view(){
        $edit = Basic::where('basic_status','1')->where('id',1)->first();
        // return $edit;
        return view('admin.manage.basic.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();
        $id = $request['id'];
        $slug = $request['slug'];
        
        $request->validate([
            'description'=>'required',
            'copy'=>'required',
        ]);
        $update= Basic::where('id',$id)->update([
            'basic_description'=>$request['description'],
            'basic_copy'=>$request['copy'],
            'basic_editor'=>Auth::user()->id,
            'basic_slug'=>$slug,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('mlogo')){
            $image = $request->file('mlogo');
            $image_name_1='Main-Logo-'.uniqId().'-'.'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/basic/'.$image_name_1);

            Basic::where('id',$id)->update([
                'basic_Mlogo'=>$image_name_1,
                'updated_at'=>carbon::now(),
            ]);
        }

        if($request->hasFile('favicon')){
            $image = $request->file('favicon');
            $image_name='Favicon-'.uniqId().'-'.'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/basic/'.$image_name);

            Basic::where('id',$id)->update([
                'basic_favicon'=>$image_name,
                'updated_at'=>carbon::now(),
            ]);
        }

        if($request->hasFile('flogo')){
            $image = $request->file('flogo');
            $image_name='Footer-Logo-'.uniqId().'-'.'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/basic/'.$image_name);

            Basic::where('id',$id)->update([
                'basic_Flogo'=>$image_name,
                'updated_at'=>carbon::now(),
            ]);
        }

        if($update){
            Session::flash('success','Basic Has been Updated !');
            return redirect()->back();
        }
    }
}
