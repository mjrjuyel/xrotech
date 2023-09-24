<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Portfolio;
use carbon\carbon;
use Image;
use Auth;
use Session;

class PortfolioController extends Controller
{
    public function view(){
        $edit = Portfolio::where('port_status','1')->where('id',1)->first();
        // return $edit;
        return view('admin.portfolio.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();
        $id = $request['id'];

        $this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required',
            'subtitle2'=>'required'
        ]);
        
        $update= Portfolio::where('id',$id)->update([
            'port_title'=>$request['title'],
            'port_sub_1'=>$request['subtitle'],
            'port_sub_2'=>$request['subtitle2'],
            'port_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('port_pic')){
            $image = $request->file('port_pic');
            $image_name_1='Port-'.uniqId().'-'.'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/portfolio/'.$image_name_1);

            Portfolio::where('id',$id)->update([
                'port_pic'=>$image_name_1,
                'updated_at'=>carbon::now(),
            ]);
        }

        if($request->hasFile('favicon')){
            $image = $request->file('favicon');
            $image_name='Favicon-'.uniqId().'-'.'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/basic/'.$image_name);

            Portfolio::where('id',$id)->update([
                'port_favicon'=>$image_name,
                'updated_at'=>carbon::now(),
            ]);
        }

        if($request->hasFile('flogo')){
            $image = $request->file('flogo');
            $image_name='Footer-Logo-'.uniqId().'-'.'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/basic/'.$image_name);

            Portfolio::where('id',$id)->update([
                'port_pic'=>$image_name,
                'updated_at'=>carbon::now(),
            ]);
        }

        if($update){
            Session::flash('success','Portfolio Has been Updated !');
            return redirect()->back();
        }
    }
}
