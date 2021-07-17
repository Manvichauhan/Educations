<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
class NavbarController extends Controller
{
 public function create(){
    	return view('front.navbarfooter');
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
        $data = new Navbar;
        $data->email=$a->email;
        $data->address=$a->address;
        $data->phone=$a->phone;
        $data->description=$a->description;
        $data->image=$filename;
        $data->save();
        if ($data) 
        {
        	return redirect('front/navbarfooter');
        }



    }


    public function display(){
    	$view = Navbar::all();
    	return view ('front.navbarfooter',compact('view'));
    }

  public function edit($id)

   {
   	$edit= Navbar::find($id);
   	return view("front.editt",compact('edit'));

   }

 
   public function update(Request $u)
   {
         $file = $u->file('image');
      
        $filename = 'image'. time().'.'.$u->image->extension();
      
        $file->move("upload/",$filename);

       
        $r = Navbar::find($u->id);
        $r->email=$u->email;
        $r->phone=$u->phone;
        $r->address=$u->address;


        $r->description=$u->description;
       $r->image=$filename;

        $r->save();
        if($r){
            return redirect('front/navbarfooter');
        }
        }
   public function delete($id)
   {
   	$delete = Navbar::find($id);
   	$del =$delete->delete();
    if($del)
        {
            return redirect('front/navbarfooter');
        }
   }




}
