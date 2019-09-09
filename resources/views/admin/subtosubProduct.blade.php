@extends('layouts.adminApp')


@section('Admincontent')

  <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
              <h4>Add Sub Product:</h4>
            </div>
            <div class="form-body">
              <form action="addsubtosubproduct" method='post'>
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
               <div class="form-group" id='TextBoxesGroup'> 
                  <div id="TextBoxDiv1">
                    <label for="sname">Sub to sub product name</label> 
                    <input type="text" class="form-control" id='sname' name="sname" placeholder="Sub name"  width="48" height="48"> 
                    <!-- <input type="button" class="button" value="Add another line" onclick="addField();"> -->
                  </div>
                    <input type='button' value='Add Button' id='addButton'>
                    <input type='button' value='Remove Button' id='removeButton'>
                  
               </div> 
               <button type="submit" class="btn btn-default">Submit</button> 
             </form>               
            </div>
          </div>

@endsection