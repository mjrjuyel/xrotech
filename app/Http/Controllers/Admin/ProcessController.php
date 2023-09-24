<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
use App\Models\Process;
use carbon\carbon;
use Image;
use Auth;
use Session;

class ProcessController extends Controller
{
    public function all(){
        $allpro = Process::where('pro_status','1')->latest('id')->get();
        // return $allrole;
        return view('admin.process.cate.all',compact('allpro'));
    //    return  Benchmark::measure(fn() => Process::where('pro_status','1')->latest('id')->get());
    }

    public function view($slug){
        $view = Process::Where('pro_status','1')->where('pro_slug',$slug)->first();
        // return $view;
        return view('admin.process.cate.view',compact('view'));
    }

    public function add(){
        return view('admin.process.cate.add');
    }

    public function insert(Request $request){
        //  return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'elem1'=>'required',
            'elem2'=>'required',
        ]);

        $insert= Process::create([
            'pro_title'=>$request['title'],
            'pro_elem1'=>$request['elem1'],
            'pro_elem2'=>$request['elem2'],
            'pro_elem3'=>$request['elem3'],
            'pro_elem4'=>$request['elem4'],
            'pro_slug'=>'role-'.uniqId(),
            'pro_main'=>1,
            'pro_creator'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Succesfully Process Type Inserted !');
            return redirect()->route('dashboard.process');
        }
       
    }

    public function edit($slug){
        $edit=Process::where('pro_status','1')->where('pro_slug',$slug)->first();
        return view('admin.process.cate.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();

        $id = $request['id'];
        $slug = $request['slug'];
        $request->validate([
            'title'=>'required',
            'elem1'=>'required',
            'elem2'=>'required',
        ]);
        $update= Process::where('id',$id)->update([
            'pro_title'=>$request['title'],
            'pro_elem1'=>$request['elem1'],
            'pro_elem2'=>$request['elem2'],
            'pro_elem3'=>$request['elem3'],
            'pro_elem4'=>$request['elem4'],
            'pro_slug'=>$slug,
            'pro_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Succesfully Process Type Updated !');
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function softdel(Request $request){
        $id = $request['modal_id'];
        $softdele= Process::where('pro_status','1')->where('id',$id)->update([
            'pro_status'=>0,
            'updated_at'=>carbon::now(),
        ]);

        if($softdele){
            Session::flash('success','Succesfully Removed !');
            return redirect()->route('dashboard.process');
        }
    }

    public function restore(Request $request){
        $id = $request['modal_id'];

        $restore = Process::where('pro_status','0')->where('id',$id)->update([
            'pro_status'=>1,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($restore){
            Session::flash('success','File Move To The Main Page ');
            return redirect()->back();
        }
        // return $request;
    }

    public function delete($slug){
        // $id = $request['modal_id'];
        $delete = Process::where('pro_slug',$slug)->delete();
        // return $delete;
        if($delete){
            Session::flash('success','Delete Message');
            return redirect()->back();
        }
    }
}
