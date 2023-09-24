<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use carbon\carbon;
use Auth;
use Session;

class ContactUsController extends Controller
{
    public function view(){
        $edit= Contactus::where('id','1')->first();
        return view('admin.contactus.edit',compact('edit'));
    }

    public function update(Request $request){
        // return $request->all();
        $id=$request['id'];
        
        $update= ContactUs::where('id',1)->update([
            'cu_number1'=>$request['nb1'],
            'cu_number2'=>$request['nb2'],
            'cu_number3'=>$request['nb3'],
            'cu_number4'=>$request['nb4'],
            'cu_email1'=>$request['email1'],
            'cu_email2'=>$request['email2'],
            'cu_email3'=>$request['email3'],
            'cu_email4'=>$request['email4'],
            'cu_address1'=>$request['address1'],
            'cu_address2'=>$request['address2'],
            'cu_address3'=>$request['address3'],
            'cu_address4'=>$request['address4'],
            'cu_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Contact info Updated');
            return redirect('/dashboard/contact/view');
        }
    }
}
