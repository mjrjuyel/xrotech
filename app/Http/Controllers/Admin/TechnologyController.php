<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
use App\Models\Technology;
use carbon\carbon;
use Image;
use Auth;
use Session;

class TechnologyController extends Controller
{
    public function all(){
        $alltech = Technology::where('tech_status','1')->latest('id')->get();
        // return $allrole;
        return view('admin.technology.all',compact('alltech'));
    //    return  Benchmark::measure(fn() => Technology::where('tech_status','1')->latest('id')->get());
    }

    public function view($slug){
        $view = Technology::with('creator','editor')->Where('tech_status','1')->where('tech_slug',$slug)->first();
        // return $view;
        return view('admin.technology.view',compact('view'));
    }

    public function add(){
        return view('admin.technology.add');
    }

    public function insert(Request $request){
        //  return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'icon'=>'required',
            'elem1'=>'required',
        ]);
        
        // if($request->hasFile('icon')){
        //     $image=$request->file('icon');
        //     $image_name='tech-'.uniqId().'.'.$image->getClientOriginalExtension();
        //     Image::make($image)->save('uploads/admin/technology/'.$image_name);
        // }

        $insert= Technology::create([
            'tech_title'=>$request['title'],
            'tech_icon'=>$request['icon'],
            'tech_description'=>$request['elem1'],
            'tech_slug'=>'tech-'.uniqId(),
            'tech_creator'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Succesfully Tehcnology Inserted !');
            return redirect()->route('dashboard.technology');
        }
       
    }

    public function edit($slug){
        $edit=Technology::where('tech_status','1')->where('tech_slug',$slug)->first();
        return view('admin.technology.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();

        $id = $request['id'];
        $slug = $request['slug'];
        
        $update= Technology::where('id',$id)->update([
            'tech_title'=>$request['title'],
            'tech_description'=>$request['elem1'],
            'tech_slug'=>$slug,
            'tech_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);
        // dd($update);
        if($request->hasFile('icon')){
            $image=$request->file('icon');
            $image_name='tech-'.uniqId().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/technology/'.$image_name);

            Technology::where('id',$id)->update([
                'tech_icon'=>$image_name,
                'updated_at'=>carbon::now()->toDateTimeString(),
            ]);
        }

        if($update){
            Session::flash('success','Succesfully Service Updated !');
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function softdel(Request $request){
        $id = $request['modal_id'];
        $softdele= Technology::where('tech_status','1')->where('id',$id)->update([
            'tech_status'=>0,
            'updated_at'=>carbon::now(),
        ]);

        if($softdele){
            Session::flash('success','Succesfully Removed Updated !');
            return redirect()->back();
        }
    }

    public function restore(Request $request){
        $id = $request['modal_id'];

        $restore = Technology::where('tech_status','0')->where('id',$id)->update([
            'tech_status'=>1,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($restore){
            Session::flash('success','File Move To Main Page ');
            return redirect()->back();
        }
        // return $request;
    }

    public function delete($slug){
        // $id = $request['modal_id'];
        $delete = Technology::where('tech_slug',$slug)->delete();
        // return $delete;
        if($delete){
            Session::flash('success','Delete Message');
            return redirect()->back();
        }
    }
}
