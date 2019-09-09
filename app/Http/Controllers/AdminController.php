<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Encryption\DecryptException;
use \Crypt;

use App\Product;
use App\sub_sub_product;
use App\sub_product;
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
        $product = Product::all();
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
       $sproduct->p_id = $request->all()['productname'];
       $product->name = $request->all()['name'];
       $product->save();

       return redirect()->back()->withSuccess('Insert successfully !');

    }

    public function addsubtosubproduct(Request $request)
    {
        $sub_products=array();
        foreach ($request->all() as $key => $value ) {
             $search = 'sname';
            if(preg_match("/{$search}/i", $key)) {
                $sub_products[$key]=$value;
            }
        }

        foreach ($sub_products as $key => $$value) {
            if (!empty($sub_products)) {
                $sproduct = new sub_product;
                $sproduct->p_id = $request->all()['productname'];
                $sproduct->name = $request->all()['name'];
                $sproduct->sub_name = $value;
                $sproduct->save();
            }
        }

        $product = Product::all();
        return View::make('admin.subProduct', array('product' => $product));

    }
}
