<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Category;
use App\Navbar;
use App\OnlineCourse;
class CourseController extends Controller
{
    public function add(){
      
    	return view ('category.course');
    }

    public function SAVE(Request $a){
    	//print_r($a->all());
    	 //print_r($a->file('image'));
    	$file=$a->file('image');
    	// dd($file);
    	$filename = 'image'. time().'.'. $a->image->extension();
         //dd($filename);
        $file->move("upload/",$filename);
    	 // dd($file);
        $data = new Course;
         

        $data->course_name=$a->course_name;
        $data->description=$a->description;
        $data->price=$a->price;
        $data->details=$a->details;
        $data->course_include=$a->course_include;
        $data->course_content=$a->course_content;
        $data->category=$a->category;
        $data->image=$filename;

        $data->save();
         //echo $data;
        if ($data) 
        {
        	return redirect('category/courses');//url location
        }


    }
    public function Display(){
      $cat = Category::all();
         $Displayy = Course::all();
        return view ('category/course',compact('Displayy','cat'));
    }

  public function eddit($id)

   {
    $editt= Course::find($id);
    return view("category/eddit",compact('editt'));

   }

 
   public function Updatee(Request $u)
   {
         $file = $u->file('image');
      
        $filename = 'image'. time().'.'.$u->image->extension();
      
        $file->move("upload/",$filename);

       
        $r = Course::find($u->id);

        $r->course_name=$u->course_name;
        $r->description=$u->description;
        $r->price=$u->price;
        $r->details=$u->details;
        $r->course_include=$u->course_include;
        $r->course_content=$u->course_content;
        $r->image=$filename;
         $r->save();
        if($r){
            return redirect('category/courses');
        }
        }
   public function Delete($id)
   {
    $Delete = Course::find($id);
    $del =$Delete->delete();
    if($del)
        {
            return redirect('category/courses'); //Url location
        }
   }


public function course_detail($id)
    {
         $nav = Navbar::all();
         $show=Course::find($id);
        return view('front.course_detail',compact('nav','show'));
    }

public function courses()
    {
         $nav = Navbar::all();
         $display=Course::all();
         $category=Category::all();
         $onlinec=OnlineCourse::all();
        return view('front.courses',compact('nav','display','category','onlinec'));
    }


   public function category_course($id){

         $nav = Navbar::all();
         $data=Course::all();
         $category=Category::find($id);
         $displayy=OnlineCourse::all();
         return view('front.category_course',compact('nav','data','category','displayy'));
}


}
