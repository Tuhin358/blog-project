<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Category;


class BlogController extends Controller
{
 public function AllCat(){

    $categories=Category::latest()->paginate(5);

    $trachCat = Category::onlyTrashed()->latest()->paginate(3);

    return View('admin.category.index', compact('categories','trachCat'));
 }
 public function AddCat(Request $request ){

    $request->validate([
        'blog_name' => 'required|max:255',

    ],
    [
        'blog_name.required' => 'Plese Enter Blog Name',

    ]);

    Category::insert([
        'title'=> $request->blog_name,
        'slug'=> $request->blog_slug,
        'description'=> $request->blog_description,
        'created_at' => Carbon::now()

    ]);

    // return ('All Blog Inserted');
    return Redirect()->back()->with('success','Category Deleted Successfully');




 }
//  Edit method
public function Edit($id){
    $categories = Category::find($id);
    return view ('admin.category.edit',compact('categories'));


}

//update

public function update(Request $request,$id){

    $update=Category::find($id)->update([
        'title'=>$request->blog_title,
        'slug'=>$request->blog_slug,
        'description'=>$request->blog_description,

    ]);
    return"update successfull";

    

}

// SoftDelete


public function SoftDelete($id){
    $delete=Category::find($id)->delete();
     return Redirect()->back()->with('success','Category Deleted Successfully');
   


    
}


}
