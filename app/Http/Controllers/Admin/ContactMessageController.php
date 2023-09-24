<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ContactMessage;
use carbon\carbon;
use Session;

class ContactMessageController extends Controller
{
    public function all(){
        $allmsg = ContactMessage::where('cm_status','1')->latest('id')->get();
        // return $allmsg;
        return view('admin.manage.contact.all',compact('allmsg'));
    }

    public function view($slug){
        $view=ContactMessage::where('cm_slug',$slug)->first();
        return view('admin.manage.contact.view',compact('view'));
    }

    public function softdel(Request $request){
        $id = $request['modal_id'];

        $softdel = ContactMessage::where('cm_status','1')->where('id',$id)->update([
            'cm_status'=>0,
            'updated_at'=>carbon::now(),
        ]);

        if($softdel){
            Session::flash('success','Move To The Recycle Bin');
            return redirect()->back();
        }
    }

    public function restore(Request $request){
        $id = $request['modal_id'];

        $restore = ContactMessage::where('cm_status','0')->where('id',$id)->update([
            'cm_status'=>1,
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
        $delete = ContactMessage::where('cm_slug',$slug)->delete();
        // return $delete;
        if($delete){
            Session::flash('success','Delete Message');
            return redirect()->back();
        }
    }
}
