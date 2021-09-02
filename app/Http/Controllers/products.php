<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pro;

use App\Http\Requests;

use App\Http\Controllers\Controller;


use DB;

class products extends Controller
{
    public function save(Request $req)
    {


    //	$destinationPath = public_path('/images');

    //	$image = $req -> file('fileToUpload');

    //	$input['imagename'] = time().'.'.$image -> getClientOriginalExtension();

    //	$image->move($destinationPath.'/'.$input['imagename']);

    //	$dbPath = $destinationPath.'/'.$input['imagename'];

    	$product = new pro();
    //	$product -> id					= 	$req -> id;
    //	$product -> picture				    = 	$req -> picture;
    	$product -> productName 		  =	  $req -> productName;
    	$product -> productModel		  =	  $req -> productModel;
    	$product -> productPrice 		  = 	$req -> productPrice;
    	$product -> productCode			  = 	$req -> productCode;
    	$product -> productInStock	 	= 	$req -> productInStock;
    	$product -> productDiscount		= 	$req -> productDiscount;
    	$product -> productSizes		  =  	$req -> productSizes;
    	$product -> productDetails		= 	$req -> productDetails;


      if($req -> hasfile('picture'))
      {
        $file = $req->file('picture');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/highlights/',$filename);
        $product->picture=$filename;
      }
      else
      {
      //  return $request;
      //  highlights->picture = ''; 
      }

    	$product -> save();
    	return redirect('home');
    }

    public function index(){

  		$pros = DB::select('select * from products');

   // $products['products'] = DB::table('products')->get();
    	return view('home',['products'=>$pros]);
//
   }
   // public function index() {

   // 	$product = products::all();

   // 	return view(products.index,compact('products'));
   // }
    public function destroy($id){
    	
      DB::delete('delete from products where id = ?',[$id]);

            return redirect('home');

    }

    public function edit($id)
    {
      $tasks = DB::select('select * from products where id = ?', [$id]);
      return view ('edit',['xy'=>$tasks]);
    }

    public function update(Request $req,$id)
    {

        $name             = $req->input('productName');
        $productModel     = $req->input('productModel'); 
        $productPrice     = $req->input('productPrice');
        $productCode      = $req->input('productCode'); 
        $productInStock   = $req->input('productInStock');
        $productDiscount  = $req->input('productDiscount');       
        $productSizes     = $req->input('productSizes');     
        $productDetails   = $req->input('productDetails'); 



         $products = pro::find($id); 
         if($req -> hasfile('picture'))
      {
        $file = $req->file('picture');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/highlights/',$filename);
        $products->picture=$filename;
      }  


    DB::update('update products set productName = ? , productModel = ? , productPrice = ? , productCode = ? , productInStock = ? , productDiscount = ? , productSizes = ? , productDetails = ? where id = ?',[$name,$productModel,$productPrice,$productCode,$productInStock,$productDiscount,$productSizes,$productDetails,$id]);

    $products->save();

          return redirect('home');

    }

}
