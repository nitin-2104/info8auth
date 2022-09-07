<!-- <h1>product</h1> -->
<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h1>
    </x-slot>
    
        <h2>Products Details</h2></br>

        <form method="post" action="/product" class="text-bg-primary p-3" >
        @csrf
        
     

  <div class="form-group mb-3">
    <label for="" >Product Name</label>
    <input type="text"  class="form-control" name="product_name" value="{{old('product_name')}}" >
    <span class ="text-danger">
      @error('product name')
      {{$message}}

      @enderror
    </span>
  </div></br>

  
  <div class="form-group mb-3">
    <label for="" >Description</label>
    <input type="text" class="form-control" name="description" value="{{old('description')}}" >
    <span class ="text-danger">
      @error('description')
      {{$message}}

      @enderror
    </span>
  </div></br>

  <div class="form-group mb-3">
    <label for="price" class="form-label">Price</label>
    
      <span class="price">(₹)</span>
      <input type="text" class="form-control" name="price" value="{{old('price')}}"  >
      <span class ="text-danger">
      @error('price')
      {{$message}}

      @enderror
    </span>
    </div></br>

    <div class="form-group mb-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
    </div></br>

   <div class="form-group mb-3">
       <button type="submit" class ="btn btn-primary">Submit</button>
   </div>

</form>


</x-app-layout>