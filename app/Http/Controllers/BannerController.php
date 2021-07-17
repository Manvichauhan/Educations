<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class BannerController extends Controller
{
    public function create(){
    	return view('category.banner');
    }

    public function save(Request $a){
    	// print_r($a->all());
    	// print_r($a->file('image'));
    	$file=$a->file('image');
    	// dd($file);
    	$filename = 'image'. time().'.'. $a->image->extension();
         // dd($filename);
        $file->move("upload/",$filename);
    	 // dd($file);
        $data = new Banner;
        $data->title=$a->title;
        $data->description=$a->description;
        $data->image=$filename;
        $data->save();
        if ($data) 
        {
        	return redirect('category/banner');
        }



    }


    public function display(){
    	$data = Banner::all();
    	return view ('category.banner',compact('data'));
    }

  public function edit($id)

   {
   	$edit= Banner::find($id);
   	return view("category.editt",compact('edit'));

   }

 
   public function update(Request $u)
   {
         $file = $u->file('image');
      
        $filename = 'image'. time().'.'.$u->image->extension();
      
        $file->move("upload/",$filename);

       
        $r = Banner::find($u->id);
        $r->title=$u->title;

        $r->description=$u->description;
       $r->image=$filename;

        $r->save();
        if($r){
            return redirect('category/banner');
        }
        }
   public function delete($id)
   {
   	$delete = Banner::find($id);
   	$del =$delete->delete();
    if($del)
        {
            return redirect('category/banner');
        }
   }




}
