<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ContactMessage;
use App\Models\Service;
use App\Models\Technology;
use App\Models\ChooseUs;
use App\Models\Ai;
use App\Models\FilterData;
use App\Models\FilterType;
use App\Models\Process;

class RecycleBinController extends Controller
{
    public function index(){
        $cm_msg=ContactMessage::where('cm_status','0')->latest('updated_at')->get();
        $service=Service::where('ser_status','0')->latest('updated_at')->get();
        $technology=Technology::where('tech_status','0')->latest('updated_at')->get();
        $allchos=ChooseUs::where('cho_status','0')->latest('updated_at')->get();
        $allai=Ai::where('ai_status','0')->latest('updated_at')->get();
        $filter=FilterData::where('fil_status','0')->latest('updated_at')->get();
        $filter_type=FilterType::where('fil_type_status','0')->latest('updated_at')->get();
        $process=Process::where('pro_status','0')->latest('updated_at')->get();

        // return $filter_type;
        return view('admin.recycle.all',compact(['cm_msg','service','technology','allchos','allai','filter','filter_type','process']));
    }
    public function contact_msg(){
        $allmsg= ContactMessage::where('cm_status','0')->oldest('updated_at')->get();
        return view('admin.recycle.contact_message.all',compact('allmsg'));
    }

    public function service(){
        $allservice= Service::where('ser_status','0')->oldest('updated_at')->get();
        return view('admin.recycle.service.all',compact('allservice'));
    }
    public function technology(){
        $alltech= Technology::where('tech_status','0')->oldest('updated_at')->get();
        return view('admin.recycle.technology.all',compact('alltech'));
    }
    public function Choose(){
        $allchos= ChooseUs::where('cho_status','0')->oldest('updated_at')->get();
        return view('admin.recycle.choose.all',compact('allchos'));
    }

    public function aiservice(){
        $allaiservice= Ai::where('ai_status','0')->oldest('updated_at')->get();
        // return $allaiservice;
        return view('admin.recycle.aiservice.all',compact('allaiservice'));
    }

    public function fil_type(){
        $allfiltype= FilterType::where('fil_type_status','0')->oldest('updated_at')->get();
        // return $allaiservice;
        return view('admin.recycle.filtertype.all',compact('allfiltype'));
    }

    public function filter(){
        $alfilter= FilterData::where('fil_status','0')->oldest('updated_at')->get();
        // return $allaiservice;
        return view('admin.recycle.filter.all',compact('alfilter'));
    }

    public function process(){
        $alprocess= Process::where('pro_status','0')->oldest('updated_at')->get();
        // return $allaiservice;
        return view('admin.recycle.process.all',compact('alprocess'));
    }


    
}
