<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Session;
use carbon\carbon;
use Auth;
use Image;

class AboutUsController extends Controller
{
    public function view(){
        $edit = AboutUs::where('id','1')->first();
        return view('admin.aboutus.edit',compact('edit'));
    }
    public function update(Request $request){
        // return $request->all();
        $id=$request['id'];

        $update= AboutUs::where('id',$id)->update([
            'about_title'=>$request['title'],
            'about_subtitle'=>$request['subtitle'],
            'about_description'=>$request['detail'],
            'about_elem1'=>$request['feat1'],
            'about_elem2'=>$request['feat2'],
            'about_elem3'=>$request['feat3'],
            'about_elem4'=>$request['feat4'],
            'about_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('about_pic')){
            $image=$request->file('about_pic');
            $image_name='about-'.uniqId().'.'.$image->getClientOriginalExtension();

            Image::make($image)->save('uploads/admin/about/'.$image_name);

            AboutUs::where('id',$id)->update([
                'about_pic'=>$image_name,
                'updated_at'=>carbon::now()->toDateTimeString(),
            ]);
        }

        if($update){
            Session::flash('success','About Us Data Updated ');
            return redirect()->back();
        }
    }
}
