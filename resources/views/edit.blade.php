@extends('layouts.app')

@section('content')
<!--
  <h1 align="center" style="font-weight: 28px"> Edit Page </h1>

<form name="myform" action="update/<?php echo $xy[0]->id; ?>" method="post"  enctype="multipart/form-data">

  @csrf
	

	<table width="80%" border="0">
 
@foreach($xy as $x) 
  
		
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productName" value="{{$x->productName}}" placeholder="product Name"/></td><br>
		<tr><td><br></td></tr>
		
		<tr>
    <td>Product Model</td>
    <td><input type="text" name="productModel" value="{{$x->productModel}}" placeholder="product model" /></td><br>
		<tr><td><br></td></tr>
  </tr>
	
		<tr>
    <td>Product Code</td>
    <td><input type="text" name="productCode" value="{{$x->productCode}}" placeholder="product model" /></td><br>
		<tr><td><br></td></tr>
  </tr>
	
	
		<tr>
    
  </tr>
	
	<tr>
    <td>Product Cost</td>
    <td><input type="text" name="productPrice" value="{{$x->productPrice}}" placeholder="product cost" /></td><br>
		<tr><td><br></td></tr>
  </tr>

<tr>
    <td>Product Sizes</td>
    <td><input type="text" name="productSizes" value="{{$x->productSizes}}" placeholder="product size" /></td><br>
		<tr><td><br></td></tr>
  </tr>
		
		<tr>
    <td>Product Discount</td>
    <td><input type="text" name="productDiscount" value="{{$x->productDiscount}}" placeholder="product discount" /></td><br>
		<tr><td><br></td></tr>
  </tr>
		
  </tr>
   
   <tr>
    <td valign="top">Product Description</td>
    <td valign="top"><textarea cols="80" rows="15" name="productDetails" >{{$x->productDetails}}</textarea></td><br>

  </tr>
  <tr><td><br></td></tr>
    <td>Product in Stock</td><br>

    <td><select name="productInStock" >
		<option value="Y" >Yes</option>
		<option value="N" >No</option>
		</select></td>
	<tr><td><br></td></tr>
  </tr> 

  
   <tr>
   	 <td valign="top">Picture</td>
    <td valign="top"><input type="file" value="" name="picture"  /></td>
   </tr>
   
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Edit Page" /></td>
  </tr>
  <tr>
  <td valign="top">&nbsp;Existing Image:</td>
  <td align="left" valign="top"> <img src="{{asset('uploads/highlights/'.$x->picture)}}"   /></td>
  </tr>

@endforeach

</table>
</form>
-->

</div>
<form name="myform" action="update/<?php echo $xy[0]->id; ?>" method="post"  enctype="multipart/form-data">

  @csrf

 
@foreach($xy as $x) 


    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" align="center">Edit Car</h2>
                    <form method="POST">
                        <div class="input-group">
                           Product Name <input class="input--style-1" type="text" value="{{$x->productName}}"placeholder="NAME" name="productName">
                        </div>
                        <div class="input-group">
                           Product Model <input class="input--style-1" type="text"  value="{{$x->productModel}}"placeholder="NAME" name="productModel">
                        </div><div class="input-group">
                           Product Code <input class="input--style-1" type="text"  value="{{$x->productCode}}"placeholder="NAME" name="productCode">
                        </div><div class="input-group">
                           ProductCost <input class="input--style-1" type="text"  value="{{$x->productPrice}}"placeholder="NAME" name="productPrice">
                        </div><div class="input-group">
                           Product Sizes <input class="input--style-1" type="text" value="{{$x->productSizes}}" placeholder="NAME" name="productSizes">
                        </div><div class="input-group">
                           Product Discount <input class="input--style-1" type="text" value="{{$x->productDiscount}}" placeholder="NAME" name="productDiscount">
                        </div><div class="input-group">
                           Product Description <textarea class="input--style-1" cols="44" rows="3" type="text" placeholder="NAME" name="productDetails">{{$x->productDetails}}</textarea>
                        </div><div class="input-group">
                           Product Picture <input class="input--style-1" type="file" placeholder="NAME" name="picture">
                        </div>
                       
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="productInStock">
                                    <option disabled="disabled" selected="selected">Product in Stock</option>
    <option value="Y" >Yes</option>
    <option value="N" >No</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                 Existing Image:   <img src="{{asset('uploads/highlights/'.$x->picture)}}"   />
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>


    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>

    @endforeach



@endsection

