<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Ai;
use carbon\carbon;
use Auth;
use Image;
use Session;

class AiController extends Controller
{
    public function all(){
        $allai =Ai::where('ai_status','1')->latest('id')->get();
        return view('admin.aiservice.cate.all',compact('allai'));
    //    return  Benchmark::measure(fn() =>Ai::where('ai_status','1')->latest('id')->get());
    }

    public function view($slug){
        $view =Ai::Where('ai_status','1')->where('ai_slug',$slug)->first();
        // return $view;
        return view('admin.aiservice.cate.view',compact('view'));
    }

    public function add(){
        return view('admin.aiservice.cate.add');
    }

    public function insert(Request $request){
        //  return $request->all();
        $this->validate($request,[
            'title'=>'required',
        ]);

        $insert=Ai::create([
            'ai_title'=>$request['title'],
            'ai_main'=>1,
            'ai_slug'=>'role-'.uniqId(),
            'ai_creator'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Succesfully Ai Service type Inserted !');
            return redirect()->route('dashboard.aiservice');
        }
       
    }

    public function edit($slug){
        $edit= Ai::where('ai_status','1')->where('ai_slug',$slug)->first();
        return view('admin.aiservice.cate.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();

        $id = $request['id'];
        $slug = $request['slug'];
        $request->validate([
            'title'=>'required',
        ]);

        $update=Ai::where('id',$id)->update([
            'ai_title'=>$request['title'],
            'ai_slug'=>$slug,
            'ai_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Succesfully Ai Service Type Updated !');
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function softdel(Request $request){
        $id = $request['modal_id'];
        $softdele=Ai::where('ai_status','1')->where('id',$id)->update([
            'ai_status'=>0,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($softdele){
            Session::flash('success','Succesfully Removed !');
            return redirect()->route('dashboard.aiservice');
        }
    }

    public function restore(Request $request){
        $id = $request['modal_id'];

        $restore =Ai::where('ai_status','0')->where('id',$id)->update([
            'ai_status'=>1,
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
        $delete =Ai::where('ai_slug',$slug)->delete();
        // return $delete;
        if($delete){
            Session::flash('success','Delete Message');
            return redirect()->back();
        }
    }
}
