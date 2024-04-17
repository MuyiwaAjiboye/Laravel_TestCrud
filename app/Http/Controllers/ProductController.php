<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $products = Product::get();//a variable that contains the data from the product table

        // dd($products);
        return view('Product.index', ['product'=> $products]); 
                                                        

    }

    public function create(){
        return view('Product.create');
    }

    Public function newProduct(Request $request){

        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'discription'=>'nullable'
        ]);
        
        $createNew = Product::create($data);
        return redirect()->route('product.index'); 

    }

    public function Edit(Product $product){
        return  view('Product.edit', ['product'=> $product]);
    }
    
    public function Update(Product $product, Request $request){
        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'discription'=>'nullable'
        ]);
            // dd($data);
        $product -> update($data);
        return redirect()-> route('product.index');
    }

    public function Delete (Product $product){
        $product -> delete();
        return redirect()-> route('product.index');
    } 

}
