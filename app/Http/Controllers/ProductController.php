<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public function showProducts($category_id){
        $products=DB::table('products')->where('category_id',$category_id)->get();
        return view('admin.products.showAll',compact('products'));
    }

    public function show(){

    }
    public function delete($id){
        Product::find($id)->delete();
        return redirect()->back();
    }

    public function store(Request $request){
        $product=new Product;
        $product->name=$request->product_name;
        $product->price=$request->product_price;
        $product->quantity=$request->product_qty;
        $product->details=$request->product_details;
        if($request->image){
            $imageName=time(). '.' . $request->image->extension();
            $request->image->move(public_path('images'),$imageName);
            $product->image=$imageName;
        }
        $product->save();
        return redirect()->back();
    }

    public function create(){
        return view('admin.products.create');
    }


    public function showDet($id){
        $products=DB::table('products')->where('id',$id)->get();
        return view('product',compact('products'));
    }
}
