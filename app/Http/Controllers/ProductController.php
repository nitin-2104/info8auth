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

   //  public function create(array $input)
   //  {
   //      Validator::make($input, [
   //          'f_name' => ['required', 'string', 'max:250'],
   //          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
   //          'password' => $this->passwordRules(),
   //          'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
   //          'phone_number' => ['required', 'string', 'max:250'],
   //          'address' => ['required', 'string', 'max:250'],
   //          'qualification' => ['required', 'string', 'max:250'],
   //          'gender' => ['required', 'string', 'max:250'],


   //      ])->validate();

   //      return User::create([
   //          'name'=> $input['f_name'],
   //          'f_name' => $input['f_name'],
   //          'email' => $input['email'],
   //          'password' => Hash::make($input['password']),
   //          'address' => $input['address'],
   //          'qualification' => $input['qualification'],
   //          'phone_number' => $input['phone_number'],
   //          'gender' => $input['gender'],

   //      ]);
   //  }


