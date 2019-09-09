@extends('layouts.adminApp')


@section('Admincontent')
@if(session('success'))
    <h1>{{session('success')}}</h1>
@endif
<?php 
// echo"<pre>";print_r($product); echo"</pre>";
?>
<div class="panel-info widget-shadow">
        
          <div class="col-md-6 panel-grids">              
              <div class="panel-body">
                <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                  <div class="form-title">
                    <h4>Add Product:</h4>
                  </div>
                  <div class="form-body">
                    <form action="storeproductdata" method="post" >
                       @csrf
                     <div class="form-group"> 
                        <label for="pname">Product name</label> 
                        <input type="text" name='pname' class="form-control" id="pname" placeholder="Product name"> 
                     </div> 
                     <button type="submit" class="btn btn-default">Submit</button> 
                   </form> 
                  </div>
                </div>
              </div> 
          </div>
          <div class="col-md-6 panel-grids">            
              <div class="panel-body"> 
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
              </div> 
          </div>
          <div class="clearfix"> </div>
        </div>
  
  <div class='tables'> 
    <div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
            <h4>Product record:</h4>
            <table class="table table-hover"> 
              <thead> 
                <tr> 
                  <th>Id</th> 
                  <th>Product Name</th> 
                  <th>Action</th> 
                  <th>Action</th> 
                </tr> 
              </thead> 
              <tbody> 

                <?php

                  // forach ($product as $product) {
                  //   eceho "<tr> ";
                  //     echo "<form action='editproduct' method='post'>";?>
                  //       @csrf<?php
                  //       echo "<th scope='row'>$product->id </th> ";
                  //       echo "<td><input class='form-group' name='name' type='text' value='$product->name'></td> ";
                  //       echo "<input type='hidden' name='id' value='$product->id'> ";
                  //       echo "<td><button type='submit' class='btn btn-default'><i class='fa fa-pencil-square-o fa-lg'><i/></button></td>";
                  //       // echo "<td><button type='submit'> <i class='fa fa-pencil-square-o fa-lg' style='color: #629aa9;'><i/></button> </td>";
                  //       echo "<td><a href='deleteproduct?id=".encrypt($product->id)."'><i class='fa fa-trash fa-lg' style='color: #d9534f;'></a></i></td>";
                  //     echo "</form>";
                  //   echo "</tr>";
                  // }

                ?>
                 
                   
                </tbody> 
              </table>
          </div>
  </div>
@endsection