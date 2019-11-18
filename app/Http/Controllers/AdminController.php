<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Encryption\DecryptException;
use \Crypt;

use App\Models\Product;
use App\Models\sub_sub_product;
use App\Models\sub_product;
use App\Models\product_description;
use View;
use DB;
class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function showProduct()
    {
        $product['allproduct'] = Product::all();
        $product['sub_product'] = sub_product::all();
        // echo"<pre>";print_r($product); echo"</pre>";exit();
        return View::make('admin.product', array('product' => $product));
        // return view('admin.product',$product);
    }

    public function showSubProduct(){
        $product = Product::all();
        // echo"<pre>";print_r($product); echo"</pre>";exit();
        return View::make('admin.subProduct', array('product' => $product));
        // return view('admin.product',$product);
        // return view('admin.subProduct');
    }
    
    public function showSubtosubProduct(){
        $product = Product::all();
        return View::make('admin.subtosubProduct', array('product' => $product));
    }

    public function storeProduct()
    {
       // echo"<pre>";print_r($_POST); echo"</pre>";exit();
       $name = Input::get('pname');
       // echo $name;
       $product= new Product;
       $product->name = $name;
       $product->save();

       return redirect()->back()->withSuccess('Insert successfully !');

    }

    public function deleteproduct()
    {
       $id = Crypt::decrypt($_GET['id']);

       $product = Product::find($id);
       $product->delete();
       return redirect()->back()->withSuccess('Delete record successfully !');
    }

     public function editproduct()
    {
        $name = Input::get('name');
        $id = Input::get('id');
        // $product = new Product();
        // $product->id = $id; //already exists in database.
        // $product->name = $name;
        // $product->save();

        DB::table('product')
            ->where('id', $id)
            ->update(['name' => $name]);
        return redirect()->back()->withSuccess('Update successfully !');

    }

    public function addsubproduct(Request $request)
    {
       // echo"<pre>";print_r($_POST); echo"</pre>";
       // echo  $request->all()['productname'];exit();
       $product= new sub_product;
       $product->product_id = $request->all()['productname'];
       $product->name = $request->all()['name'];
       $product->url = $request->all()['url'];
       $product->save();

       return redirect()->back()->withSuccess('Insert successfully !');

    }

    public function addsubtosubproduct(Request $request)
    {
       // echo"<pre>";print_r($request->all()); echo"</pre>";exit();
        $sub_products=array();
        foreach ($request->all() as $key => $value ) {
             $search = 'sname';
            if(preg_match("/{$search}/i", $key)) {
                $sub_products[$key]=$value;
            }
        }

        foreach ($sub_products as $key => $$value) {
            if (!empty($sub_products)) {
                $sproduct = new sub_sub_product;
                $sproduct->product_id = $request->all()['productname'];
                $sproduct->sub_product_id = $request->all()['subproductname'];
                $sproduct->sub_name = $value;
                $sproduct->url = $request->all()['url'];
                $sproduct->save();
            }
        }

        $product = Product::all();
        return redirect()->back()->withSuccess('Insert successfully !');

    }

    public function showsubtosubpage($id,$name){
        // echo $name . "<br>";exit();
        $data['productdata'] = DB::table('product_description')
            ->join('product', 'product_description.product_id', '=', 'product.id')
            ->join('sub_product', 'sub_product.id', '=', 'product_description.sub_product_id')
            ->join('sub_sub_product', 'sub_sub_product.id', '=', 'product_description.sub_sub_product')
            ->where('product_description.sub_sub_product', $id)
            ->select('product_description.*', 'product.name as pname', 'sub_product.name as sub_product_name')
            ->get();
        $data['pagename']=$name;
        // echo "<pre>";print_r($data);exit();
        return View::make('productDescription', array('data' => $data));
    }

    public function showProductDescription(){
        $product['allproduct'] = Product::all();
        $product['sub_product'] = sub_product::all();
        $product['sub_to_subproduct'] = sub_sub_product::all();
        return View::make('admin.productdescription', array('product' => $product));
        // return view('admin.product',$product);
    }

    public function productdefination(Request $request){
      $file = $request->file('uploadfile');
   
      $destinationPath = 'uploads/ProductImage';
      $filname =  $file->move($destinationPath,$file->getClientOriginalName());
      $item = new product_description;
      $item->product_id = $request->all()['productname'];
      $item->sub_product_id = $request->all()['subproductname'];
      $item->sub_sub_product = $request->all()['sub_to_subproductname'];
      $item->itemname = $request->all()['itemname'];
      $item->description = $request->all()['description'];      
      $item->image   = $filname;
      $item->size = $request->all()['size'];
      $item->temperature = $request->all()['temperature'];
      $item->speed = $request->all()['speed'];
      $item->pressure = $request->all()['pressure'];
      $item->material = $request->all()['material'];
      $item->type =$request->all()['type'];
      $item->floatdia = $request->all()['floatdia'];
      $item->floatweight = $request->all()['floatweight'];
      $item->threadtype = $request->all()['threadtype'];
      $item->threadsize = $request->all()['threadsize'];
      $item->end = $request->all()['end'];
      $item->save();
      return redirect()->back()->withSuccess('Insert successfully !');
        // echo "<pre>";print_r( $request->all());exit();
        // return view('admin.product',$product);
    }
}
