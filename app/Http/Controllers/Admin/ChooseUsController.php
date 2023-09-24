<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ChooseUs;
use carbon\carbon;
use Auth;
use Image;
use Session;

class ChooseUsController extends Controller
{
    public function all(){
        $allchoose = ChooseUs::where('cho_status','1')->latest('id')->get();
        return view('admin.choose.cate.all',compact('allchoose'));
    //    return  Benchmark::measure(fn() => ChooseUs::where('cho_status','1')->latest('id')->get());
    }

    public function view($slug){
        $view = ChooseUs::Where('cho_status','1')->where('cho_slug',$slug)->first();
        // return $view;
        return view('admin.choose.cate.view',compact('view'));
    }

    public function add(){
        return view('admin.choose.cate.add');
    }

    public function insert(Request $request){
        //  return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'detail'=>'required',
            'icon'=>'required',
        ]);

        $insert= ChooseUs::create([
            'cho_title'=>$request['title'],
            'cho_detail'=>$request['detail'],
            'cho_icon'=>$request['icon'],
            'cho_main'=>1,
            'cho_slug'=>'role-'.uniqId(),
            'cho_creator'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Succesfully Choose Inserted !');
            return redirect()->route('dashboard.choose');
        }
       
    }

    public function edit($slug){
        $edit=ChooseUs::where('cho_status','1')->where('cho_slug',$slug)->first();
        return view('admin.choose.cate.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();

        $id = $request['id'];
        $slug = $request['slug'];
        $request->validate([
            'title'=>'required',
            'detail'=>'required',
            'icon'=>'required',
        ]);

        $update= ChooseUs::where('id',$id)->update([
            'cho_title'=>$request['title'],
            'cho_detail'=>$request['detail'],
            'cho_icon'=>$request['icon'],
            'cho_slug'=>$slug,
            'cho_main'=>1,
            'cho_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Succesfully Choose Type Updated !');
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function softdel(Request $request){
        $id = $request['modal_id'];
        $softdele= ChooseUs::where('cho_status','1')->where('id',$id)->update([
            'cho_status'=>0,
            'updated_at'=>carbon::now(),
        ]);

        if($softdele){
            Session::flash('success','Succesfully Removed !');
            return redirect()->route('dashboard.choose');
        }
    }

    public function restore(Request $request){
        $id = $request['modal_id'];

        $restore = ChooseUs::where('cho_status','0')->where('id',$id)->update([
            'cho_status'=>1,
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
        $delete = ChooseUs::where('cho_slug',$slug)->delete();
        // return $delete;
        if($delete){
            Session::flash('success','Delete Message');
            return redirect()->back();
        }
    }
}
