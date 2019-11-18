@extends('layouts.adminApp')


@section('Admincontent')
@if(session('success'))
    <h1>{{session('success')}}</h1>
@endif
<?php 
$data = $product['sub_product']
// echo"<pre>";print_r($product); echo"</pre>";
?>

<div class="panel-info widget-shadow">
  <div class="row">
    <div>
      <a href="productdescription">
        <button class="btn btn-success pull-right">                
          <i class="fa fa-pencil-square-o"></i>Add product description
        </button>
      </a>
    </div>
  </div>
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
                      foreach ($product['allproduct'] as $product) {
                        echo "<option value='$product->id'>$product->name</option>";
                      }
                    ?>                  
                </select>
             </div> 
             <div class="form-group"> 
                <label for="name">Sub product name</label> 
                <input type="text" name="name" class="form-control" id="name" placeholder="Name"> 
             </div> 
             <div class="form-group"> 
                <label for="name">URL</label> 
                <input type="text" name="url" class="form-control" id="url" placeholder="URL"> 
             </div>
             <button type="submit" class="btn btn-default">Submit</button> 
           </form>                    
          </div>
        </div>
      </div> 
  </div>
  <div class="clearfix"> </div>
</div>

<div class="panel-info widget-shadow">
  <div class="col-md-12 panel-grids">              
      <div class="panel-body">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
          <div class="form-title">
            <h4>Add Product:</h4>
          </div>
          <div class="form-body">
              <form action="addsubtosubproduct" method='post'>
                @csrf
                <div class="form-group"> 
                  <label for="name">Product name</label>

                  <select class="form-control" name="productname"> 
                     <?php
                        foreach ($product->get() as $product) {
                          echo "<option value='$product->id'>$product->name</option>";
                        }
                      ?>                    
                  </select>
               </div> 
               <div class="form-group"> 
                  <label for="name">Sub product name</label> 
                  <!-- <input type="text" name="name" class="form-control" id="name" placeholder="Name">  -->
                   <select class="form-control" name="subproductname"> 
                     <?php
                        // $data = $product['sub_product'];
                        foreach ($data as $product) {
                          echo "<option value='$product->id'>$product->name</option>";
                        }
                      ?>                    
                  </select>
               </div> 
               <div class="form-group" id='TextBoxesGroup'> 
                  <div id="TextBoxDiv1">
                    <label for="sname">Sub to sub product name</label> 
                    <input type="text" class="form-control" id='sname' name="sname" placeholder="Sub name"  width="48" height="48"> 
                    <!-- <input type="button" class="button" value="Add another line" onclick="addField();"> -->
                  </div>
                    <input type='button' value='Add Button' id='addButton'>
                    <input type='button' value='Remove Button' id='removeButton'>
                  
               </div>
               <div class="form-group"> 
                <label for="name">URL</label> 
                <input type="text" name="url" class="form-control" id="url" placeholder="URL"> 
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

              foreach ($product->get() as $product) {
                echo "<tr> ";
                  echo "<form action='editproduct' method='post'>";?>
                    @csrf<?php
                    echo "<th scope='row'>$product->id </th> ";
                    echo "<td><input class='form-group' name='name' type='text' value='$product->name'></td> ";
                    echo "<input type='hidden' name='id' value='$product->id'> ";
                    echo "<td><button type='submit' class='btn btn-default'><i class='fa fa-pencil-square-o fa-lg'><i/></button></td>";
                    // echo "<td><button type='submit'> <i class='fa fa-pencil-square-o fa-lg' style='color: #629aa9;'><i/></button> </td>";
                    echo "<td><a href='deleteproduct?id=".encrypt($product->id)."'><i class='fa fa-trash fa-lg' style='color: #d9534f;'></a></i></td>";
                  echo "</form>";
                echo "</tr>";
              }

            ?>
             
               
            </tbody> 
          </table>
      </div>
</div>
@endsection