@extends('layouts.adminApp')


@section('Admincontent')
<?php 
$data = $product['sub_product'];
$allproduct = $product['allproduct'];
$sub_to_subproduct = $product['sub_to_subproduct'];
// echo"<pre>";print_r($product['allproduct']); echo"</pre>";exit();
?>

<div class="panel-info widget-shadow">
  @if(session('success'))
    <h1>{{session('success')}}</h1>
@endif
  <div class="col-md-12 panel-grids">              
      <div class="panel-body">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
          <div class="form-title">
            <h4>Add Product Description:</h4>
          </div>
          <div class="form-body">
              <form action="productdefination" method='post' enctype="multipart/form-data">
                @csrf
                <div class="form-group"> 
                  <label for="name">Product name</label>

                  <select class="form-control" name="productname"> 
                    <option>Select product</option>
                     <?php
                        foreach ($allproduct as $allproduct) {
                          echo "<option value='$allproduct->id'>$allproduct->name</option>";
                        }
                      ?>                    
                  </select>
               </div> 
               <div class="form-group"> 
                  <label for="name">Sub product name</label> 
                   <select class="form-control" name="subproductname"> 
                    <option>Select sub product</option>
                     <?php
                        foreach ($data as $product) {
                          echo "<option value='$product->id'>$product->name</option>";
                        }
                      ?>                    
                  </select>
               </div> 
               <div class="form-group"> 
                  <label for="name">Sub to sub product name</label> 
                   <select class="form-control" name="sub_to_subproductname"> 
                      <option>Select sub to sub product</option>
                     <?php
                        foreach ($sub_to_subproduct as $sub_to_subproduct) {
                          echo "<option value='$sub_to_subproduct->id'>$sub_to_subproduct->sub_name</option>";
                        }
                      ?>                    
                  </select>
               </div> 
               <div class="form-group"> 
                <label for="name">Item name</label> 
                <input type="text" name="itemname" class="form-control" id="itemname" placeholder="Item name"> 
               </div> 
               <div class="form-group green-border-focus">
                  <label for="name">Item description</label> 
                  <textarea name="description" class="form-control" id="description" placeholder="Item description" rows="3"></textarea>
               </div>
               <!-- div class="form-group"> 
                <label for="name">Item description</label> 
                <input type="text" name="description" class="form-control" id="description" placeholder="Item description"> 
               </div>  -->
               <div class="form-group"> 
                <label for="name">Item image</label> 
                <input type="file" name="uploadfile" class="form-control" id="uploadfile" placeholder="Item  "> 
               </div>
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Size  </label> 
                    <input type="text" name="size" value="" class="form-control" id="size" placeholder="Size"> 
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Temperature(MAX)  </label> 
                    <input type="text" name="temperature" value="" class="form-control" id="temperature" placeholder="temperature">
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Speed </label> 
                    <input type="text" name="speed" value="" class="form-control" id="speed" placeholder="Speed"> 
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Pressure(Max)  </label> 
                    <input type="text" name="pressure" value="" class="form-control" id="pressure" placeholder="Pressure"> 
                   </div>
                 </div>
               </div>
               <div class="row">
                <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Material  </label> 
                    <input type="text" name="material" value="" class="form-control" id="material" placeholder="Material">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Type  </label> 
                    <input type="text" name="type" value="" class="form-control" id="type" placeholder="Type"> 
                   </div>
                 </div>
                 
               </div>
               <div class="row">
                <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Float dia  </label> 
                    <input type="text" name="floatdia" value="" class="form-control" id="floatdia" placeholder="Float dia">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Float weight  </label> 
                    <input type="text" name="floatweight" value="" class="form-control" id="floatweight" placeholder="Float weight"> 
                   </div>
                 </div>
                 
               </div>
               <div class="row">
                <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Thread type  </label> 
                    <input type="text" name="threadtype" value="" class="form-control" id="threadtype" placeholder="Thread type">
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Thread size  </label> 
                    <input type="text" name="threadsize" value="" class="form-control" id="threadsize" placeholder="Thread size"> 
                   </div>
                 </div>
                 
               </div>
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">End  </label> 
                    <input type="text" name="end" value="" class="form-control" id="end" placeholder="End">
                   </div>
                 </div>
                 <!-- <div class="col-md-6">
                   <div class="form-group"> 
                    <label for="name">Item  </label> 
                    <input type="text" name="itemname" class="form-control" id="itemname" placeholder="Item">
                   </div>
                 </div> -->
               </div>
               <button type="submit" class="btn btn-default">Submit</button> 
             </form>               
          </div>
        </div>
      </div> 
  </div>
  <div class="clearfix"> </div>
</div>

@endsection