<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FilterData;
use App\Models\FilterType;
use carbon\carbon;
use Image;
use Auth;
use Session;

class FilterMainController extends Controller
{
    public function all(){
        $allfildata = FilterData::where('fil_status','1')->latest('id')->get();
        // return $allfildata;
        return view('admin.filter.main.all',compact('allfildata'));
    //    return  Benchmark::measure(fn() => FilterData::where('fil_status','1')->latest('id')->get());
    }

    public function view($slug){
        $view = FilterData::Where('fil_status','1')->where('fil_slug',$slug)->first();
        // return $view;
        return view('admin.filter.main.view',compact('view'));
    }

    public function add(){
        $filtertype = FilterType::where('fil_type_status','1')->latest('id')->get();
        return view('admin.filter.main.add',compact('filtertype'));
    }

    public function insert(Request $request){
        //  return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'detail'=>'required',
            'pic'=>'required',
            'cat'=>'required',
        ]);
        
        if($request->hasFile('pic')){
            $image=$request->file('pic');
            $image_name='filter-'.uniqId().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/filter/'.$image_name);
        }
        $insert= FilterData::create([
            'fil_title'=>$request['title'],
            'fil_pic'=>$image_name ?? null,
            'fil_detail'=>$request['detail'],
            'fil_cat'=>$request['cat'],
            'fil_slug'=>'fil-'.uniqId(),
            'fil_creator'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Succesfully Filter Data Inserted !');
            return redirect()->route('dashboard.filter');
        }
       
    }

    public function edit($slug){
        $edit=FilterData::where('fil_status','1')->where('fil_slug',$slug)->first();
        $filtertype=FilterType::where('fil_type_status','1')->get();
        return view('admin.filter.main.edit',compact(['edit','filtertype']));
    }

    public function update(Request $request){
        // return $request->all();

        $id = $request['id'];
        $slug = $request['slug'];
         $request->validate([
            'title'=>'required',
            'detail'=>'required',
        ]);
        $update= FilterData::where('id',$id)->update([
            'fil_title'=>$request['title'],
            'fil_detail'=>$request['detail'],
            'fil_slug'=>$slug,
            'fil_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);
        // dd($update);
        if($request->hasFile('pic')){
            $image=$request->file('pic');
            $image_name='ban-'.uniqId().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/filter/'.$image_name);

            FilterData::where('id',$id)->update([
                'fil_pic'=>$image_name,
                'updated_at'=>carbon::now()->toDateTimeString(),
            ]);
        }

        if($update){
            Session::flash('success','Succesfully Filter Data Updated !');
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function softdel(Request $request){
        $id = $request['modal_id'];
        $softdele= FilterData::where('fil_status','1')->where('id',$id)->update([
            'fil_status'=>0,
            'updated_at'=>carbon::now(),
        ]);

        if($softdele){
            Session::flash('success','Succesfully Removed Updated !');
            return redirect()->back();
        }
    }

    public function restore(Request $request){
        $id = $request['modal_id'];

        $restore = FilterData::where('fil_status','0')->where('id',$id)->update([
            'fil_status'=>1,
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
        $delete = FilterData::where('fil_slug',$slug)->delete();
        // return $delete;
        if($delete){
            Session::flash('success','Delete Filter Data');
            return redirect()->back();
        }
    }
}
