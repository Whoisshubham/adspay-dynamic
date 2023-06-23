<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        return view('welcome');

    }
    public function applyCard($title){
        return view('applynow',compact('title'));
    }
}
