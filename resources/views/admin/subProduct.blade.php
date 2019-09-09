@extends('layouts.adminApp')


@section('Admincontent')
@if(session('success'))
    <h1>{{session('success')}}</h1>
@endif
  <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
    <div class="form-title">
      <h4>Add Sub Product:</h4>
    </div>
    <div class="form-body">
      <form action="addsubproduct" method='post'>
        @csrf
        <div class="form-group"> 
          <label for="name">Product name</label>

          <select class="form-control" name="productname"> 
             <?php

                foreach ($product as $product) {
                  echo "<option value='$product->id'>$product->name</option>";
                }

              ?>
            
          </select>
       </div> 
       <div class="form-group"> 
          <label for="name">Sub product name</label> 
          <input type="text" name="name" class="form-control" id="name" placeholder="Name"> 
       </div> 
       <button type="submit" class="btn btn-default">Submit</button> 
     </form>               
    </div>
  </div>

@endsection