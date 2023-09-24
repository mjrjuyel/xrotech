<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FilterType;
use carbon\carbon;
use Auth;
use Session;

class filterTypeController extends Controller
{
    public function all(){
        $allfiltype = FilterType::where('fil_type_status','1')->latest('id')->get();
        return view('admin.filter.cate.all',compact('allfiltype'));
    //    return  Benchmark::measure(fn() => FilterType::where('fil_type_status','1')->latest('id')->get());
    }

    public function view($slug){
        $view = FilterType::Where('fil_type_status','1')->where('fil_type_slug',$slug)->first();
        // return $view;
        return view('admin.filter.cate.view',compact('view'));
    }

    public function add(){
        return view('admin.filter.cate.add');
    }

    public function insert(Request $request){
        //  return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'btn'=>'required',
        ]);

        $insert= FilterType::create([
            'fil_type_title'=>$request['title'],
            'fil_type_btn'=>$request['btn'],
            'fil_type_slug'=>'fil-t-'.uniqId(),
            'fil_type_creator'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Succesfully Filter category Inserted !');
            return redirect()->route('dashboard.filter-cat');
        }
       
    }

    public function edit($slug){
        $edit=FilterType::where('fil_type_status','1')->where('fil_type_slug',$slug)->first();
        return view('admin.filter.cate.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();

        $id = $request['id'];
        $slug = $request['slug'];
        $request->validate([
            'title'=>'required',
            'btn'=>'required',
        ]);

        $update= FilterType::where('id',$id)->update([
            'fil_type_title'=>$request['title'],
            'fil_type_btn'=>$request['btn'],
            'fil_type_slug'=>$slug,
            'fil_type_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Succesfully Filter category Type Updated !');
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function softdel(Request $request){
        $id = $request['modal_id'];
        $softdele= FilterType::where('fil_type_status','1')->where('id',$id)->update([
            'fil_type_status'=>0,
            'updated_at'=>carbon::now(),
        ]);

        if($softdele){
            Session::flash('success','Succesfully Removed !');
            return redirect()->back();
        }
    }

    public function restore(Request $request){
        $id = $request['modal_id'];

        $restore = FilterType::where('fil_type_status','0')->where('id',$id)->update([
            'fil_type_status'=>1,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($restore){
            Session::flash('success','File Move To Main Page ');
            return redirect()->back();
        }
    }

    public function delete($slug){
        // $id = $request['modal_id'];
        $delete = FilterType::where('fil_type_slug',$slug)->delete();
        if($delete){
            Session::flash('success','Delete Message');
            return redirect()->back();
        }
    }
}
