<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        $testmonialList=Testimonial::orderBy("ID","DESC")->get();
        return view('index',compact('testmonialList'));

    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        $teamList=Team::orderBy('ID',"DESC")->get();
        return view('about',compact('teamList'));
    }
    public function service(){
        return view('service');
    }
    public function career(){
        return view('career');
    }

    public function policy(){
        return view('policy');
    }

    public function life(){
        $getGallery=Gallery::orderBy('ID','DESC')->get();
        return view('life',compact('getGallery'));
    }
}
