<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;



class CategoryController extends Controller
{
    //

    public function index(){
        $categories=DB::table('Category')->get();
        return view('admin.products.index',compact('categories'));
    }
   

    public function delete($id){
        Category::find($id)->delete();
        return redirect()->back();
    }
}

