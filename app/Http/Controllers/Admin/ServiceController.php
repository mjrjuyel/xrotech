<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
use App\Models\Service;
use carbon\carbon;
use Image;
use Auth;
use Session;

class ServiceController extends Controller
{
    public function all(){
        $allservice = Service::where('ser_status','1')->latest('id')->get();
        // return $allrole;
        return view('admin.service.all',compact('allservice'));
    //    return  Benchmark::measure(fn() => Service::where('ser_status','1')->latest('id')->get());
    }

    public function view($slug){
        $view = Service::Where('ser_status','1')->where('ser_slug',$slug)->first();
        // return $view;
        return view('admin.service.view',compact('view'));
    }

    public function add(){
        return view('admin.service.add');
    }

    public function insert(Request $request){
        //  return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'icon'=>'required',
            'elem1'=>'required',
            'elem2'=>'required',
            'elem3'=>'required',
        ]);
        
        
        $insert= Service::create([
            'ser_title'=>$request['title'],
            'ser_icon'=>$request['icon'],
            'ser_elem1'=>$request['elem1'],
            'ser_elem2'=>$request['elem2'],
            'ser_elem3'=>$request['elem3'],
            'ser_slug'=>'role-'.uniqId(),
            'ser_creator'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Succesfully Service Inserted !');
            return redirect()->route('dashboard.service');
        }
       
    }

    public function edit($slug){
        $edit=Service::where('ser_status','1')->where('ser_slug',$slug)->first();
        return view('admin.service.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();

        $id = $request['id'];
        $slug = $request['slug'];
        $request->validate([
            'title'=>'required',
            'icon'=>'required',
            'elem1'=>'required',
            'elem2'=>'required',
            'elem3'=>'required',
        ]);
        $update= Service::where('id',$id)->update([
            'ser_title'=>$request['title'],
            'ser_icon'=>$request['icon'],
            'ser_elem1'=>$request['elem1'],
            'ser_elem2'=>$request['elem2'],
            'ser_elem3'=>$request['elem3'],
            'ser_slug'=>$slug,
            'ser_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

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
        $softdele= Service::where('ser_status','1')->where('id',$id)->update([
            'ser_status'=>0,
            'updated_at'=>carbon::now(),
        ]);

        if($softdele){
            Session::flash('success','Succesfully Removed Updated !');
            return redirect()->route('dashboard.service');
        }
    }

    public function restore(Request $request){
        $id = $request['modal_id'];

        $restore = Service::where('ser_status','0')->where('id',$id)->update([
            'ser_status'=>1,
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
        $delete = Service::where('ser_slug',$slug)->delete();
        // return $delete;
        if($delete){
            Session::flash('success','Delete Message');
            return redirect()->back();
        }
    }

}