<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
   //CALL AUTH

 public function __construct()
    {
        $this->middleware('auth');
    }

//

   public function index(){

   	return view('category.index');
   }
   public function items(){
   	return view('category.items');

   }

public function save(Request $a){
   	//print_r($a->all());
    //print_r($a->all());
       //print_r($a->file('image'));
      $file=$a->file('image');
      // dd($file);
      $filename = 'image'. time().'.'. $a->image->extension();
         //dd($filename);
        $file->move("upload/",$filename);
       // dd($file);

   	$r= new Category;
   $r->id=$a->id;
   	$r->name=$a->name;
   	$r->status=1;
    $r->image=$filename;

   	$r->save();
   	if($r)
      {
        return redirect('category/items'); 
      }
   
   }

   public function display()
   {
    
   //	echo "hsbhsgb";
   	$show= Category::all();
   	//echo "<pre>";
   	//print_r($data);
   	return view("category.items",compact('show'));
   }
   public function edit($id)

   {
   	$edit= Category::find($id);
   	return view("category.edit",compact('edit'));

   }

   public function update(Request $u)
   {
    $file = $u->file('image');
      
        $filename = 'image'. time().'.'.$u->image->extension();
      
        $file->move("upload/",$filename);

       
        //print_r($z->all());
        $r = Category::find($u->id);
        $r->name=$u->name;
        
      $r->image=$filename;
        $r->save();
        if($r){
            return redirect('category/items');
        }
        }
   public function delete($id)
   {
   	$delete = Category::find($id);
   	$del =$delete->delete();
    if($del)
        {
            return redirect('category/items');
        }
   }




}
