<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Banner;
use App\Course;
use App\Navbar;
use App\Category;
use App\OnlineCourse;
use App\User;
class FrontendController extends Controller
{
     public function create()
    {
    	$data=Banner::all();
    	$nav=Navbar::all();
    	$display=Course::all();
    	$show=Category::all();
        $displayy=OnlineCourse::all();
    	
    	
    	return view('front.index',compact('data','nav','display','show','displayy'));
    }


public function signup()
{
    //echo "hsdb";
    $nav=Navbar::all();
    return view('front.signup',compact('nav'));
}

public function signup_save(Request $s){
    $data=new User;
    $data->name=$s->name;
    $data->email=$s->email;
    $data->password=Hash::make($s->password);
    $data->save();
}


}
