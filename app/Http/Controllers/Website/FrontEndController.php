<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Technology;
use App\Models\AboutUs;
use App\Models\ChooseMain;
use App\Models\aiMain;
use App\Models\Portfolio;
use App\Models\FilterType;
use App\Models\FilterData;
use App\Models\ProcessMain;
use App\Models\GetTouch;
use App\Models\Basic;
use App\Models\ContactUs;

use Session;
use carbon\carbon;

class FrontEndController extends Controller
{
    public function index(){
        $banner = Banner::where('id','1')->first();
        $service = Service::where('ser_status','1')->latest('id')->take(6)->get();
        $technology = Technology::where('tech_status','1')->latest('id')->take(6)->get();
        $aboutus = AboutUs::where('id','1')->first();
        $choose = ChooseMain::with('Cho_type')->where('id','1')->first();
        $aiservice = aiMain::with('ai_type')->where('id','1')->first();
        $portfolio = Portfolio::where('id','1')->first();
        $filtertype = FilterType::where('fil_type_status','1')->latest('id')->take(6)->get();
        $filter = FilterData::where('fil_status','1')->latest('id')->take(6)->get();
        $process = ProcessMain::with('pro_type')->where('id','1')->first();
        $gettouch = GetTouch::where('id','1')->first();
        $basic = Basic::where('id','1')->first();
        $contact = ContactUs::where('id','1')->first();
        // return $basic;
        return view('website',compact(['banner','service','technology','aboutus','choose','aiservice','portfolio','filtertype','filter','process','gettouch','basic','contact']));
    }

    public function message(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
        ]);

        $insert = ContactMessage::create([
            'cm_name'=>$request['name'],
            'cm_email'=>$request['email'],
            'cm_phone'=>$request['phone'],
            'cm_subject'=>$request['subject'],
            'cm_message'=>$request['message'],
            'cm_slug'=>'cm-'.uniqid(),
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
        //  return $request->all();
        if($insert){
            Session::flash('success','Send Message Successfully !');
            return redirect()->back();
        }
    }
}
