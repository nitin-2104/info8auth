<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;

 
class ProductController extends Controller
{
   public function details(Request $request) 
    {   

      Validator::make($request, [
         'product_name' => ['required', 'string', 'max:250'],
         'description' => ['required', 'string', 'max:250'],
         'price' => ['required', 'string', 'max:250'],
      ])->validate();

     
      //       // dd($request);
      // $request->validate([
      //    'product_name'=>'required|max:8',
      //    'description'=>'required',
      //    'price'=>'required',
      // ]);
         //   $validated=$request->ProductRequest();
         //   dd($validated); 
         //            // 'product_name'=>'required'|'distinct'|'string',
                    // 'description'=>'required'|'distinct'|'string',
                    // 'price'=>'required'|'distinct'|'numeric',
           $product= new Product();
           $product->product_name=$request->product_name;
           $product->description=$request->description;
           $product->price=$request->price;
           $product->save();
           // dump($product); die();
           return redirect ('product');

        
    }

}
