@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



<!--
                    <form name="myform" action="submit" method="post" enctype="multipart/form-data" >

@csrf


    <table class="table">
  <tr>
    <td height="33" colspan="2" style="font-weight:bold" >
        
        
      
      </td>
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Add Product Record</strong></td>
       
    <tr><td><br></td></tr>
       
  </tr>
        
       

        <tr>
    <td>Product Code</td>
    <td><input type="text" name="productCode" value="" placeholder="product code" /></td><br>
        <tr></tr>

  </tr>
        
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productName" value="" placeholder="product name" /></td><br>
        <tr></tr>
        
        <tr>
    <td>Product Model</td>
    <td><input type="text" name="productModel" value="" placeholder="product model" /></td><br>
        <tr></tr>
  </tr>
    
        <tr>
    
  </tr>
    
    <tr>
    <td>Product Cost</td>
    <td><input type="text" name="productPrice" value="" placeholder="product cost" /></td><br>
        <tr></tr>
  </tr>

<tr>
    <td>Product Sizes</td>
    <td><input type="text" name="productSizes" value="" placeholder="product size" /></td><br>
        <tr></tr>
  </tr>
        
        <tr>
    <td>Product Discount</td>
    <td><input type="text" name="productDiscount" value="" placeholder="product discount" /></td><br>
        <tr></tr>
  </tr>
        
  </tr>
   
   <tr>
    <td valign="top">Product Description</td>
    <td valign="top"><textarea rows="7" cols="40" name="productDetails" placeholder="text..."></textarea></td>

  </tr>
  <tr></tr>
    <td>Product in Stock</td><br>

    <td><select name="productInStock" >
        <option value="Y" >Yes</option>
        <option value="N" >No</option>
        </select></td>
    <tr></tr>
  </tr> 
  <tr>
     <td valign="top">Picture</td>
      <tr></tr>
    <td valign="top"><input type="file" value="" name="picture"  /></td>
   </tr>
<tr></tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Add Product" /></td>
  </tr>
</table>
</form>
-->
<form name="myform" action="submit" method="post" enctype="multipart/form-data" >

  @csrf



    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" align="center">Add Car</h2>
                    <form method="POST">
                        <div class="input-group">
                           Product Name <input class="input--style-1" type="text" name="productName">
                        </div>
                        <div class="input-group">
                           Product Model <input class="input--style-1" type="text"   name="productModel">
                        </div><div class="input-group">
                           Product Code <input class="input--style-1" type="text"   name="productCode">
                        </div><div class="input-group">
                           ProductCost <input class="input--style-1" type="text"   name="productPrice">
                        </div><div class="input-group">
                           Product Sizes <input class="input--style-1" type="text"   name="productSizes">
                        </div><div class="input-group">
                           Product Discount <input class="input--style-1" type="text"  name="productDiscount">
                        </div><div class="input-group">
                           Product Description <textarea class="input--style-1" cols="44" rows="1" type="text"  name="productDetails"></textarea>
                        </div><div class="input-group">
                           Product Picture <input class="input--style-1" type="file"  name="picture">
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
                       
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">ADD CAR</button>
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
    <script src="{{asset('vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>
</form>


<!--
<table border = "1" align="center">
<tr>
<td>Product Id</td>
<td>Product Name</td>
<td>Product Model</td>
<td>Product Price</td>
<td>Product Code</td>
<td>Product In Stock</td>
<td>Product Discount</td>
<td>Product Sizes</td>
<td>Product Details</td>
<td>Product Picture</td>

</tr>
@foreach ($products as $product)
<tr>
<td>{{       $product -> id               }}</td>
<td>{{       $product -> productName      }}</td>
<td>{{       $product -> productModel     }}</td>   
<td>{{       $product -> productPrice     }}</td>
<td>{{       $product -> productCode      }}</td>
<td>{{       $product -> productInStock   }}</td>
<td>{{       $product -> productDiscount  }}</td>
<td>{{       $product -> productSizes     }}</td>
<td>{{       $product -> productDetails   }}</td>
<td><img src=" {{asset('uploads/highlights/'. $product -> picture ) }}" alt="{{       $product -> productName      }}"></td>

<td><a href="delete/{{$product->id}}">Delete</a></td>
<td><a href="edit/{{$product->id}}">Edit</a></td>

</tr>
@endforeach
</table>
-->

<h1 style="font-weight: 28px">Showing Cars</h1>

<div class="container">
<div class="row">
@foreach ($products as $product)

<div class="col-md-4">


<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
<div class="mainflip">
<div class="frontside">
<div class="card" style="width:20rem;">


<img class="card-img-top img- fluid" src=" {{asset('uploads/highlights/'. $product -> picture ) }}" alt="{{ $product -> productName  }}">


<div class="card-block">
<h3 class="card-title">{{       $product -> productName      }}</br></h3>
 <h4 style="color: darkred;"             >   Rs. {{       $product -> productPrice     }} Only/-</h4>
<p class="card-text">{{       $product -> productDetails   }}</p>
</div>
</div>
</div>
<div class="backside">
<div class="card" style="width:20rem;">
<div class="card-header">
<strong>ID  ::  </strong>{{       $product -> id               }}
</div>
<div class="card-block">
<h4 class="card-title">Model : {{       $product -> productModel     }}</h4>
<p class="card-text">Product Code : {{       $product -> productCode      }}</br>
                    Availability : {{       $product -> productInStock   }}</br>
                    Discount : {{       $product -> productDiscount  }}% </br>
                    Size : {{       $product -> productSizes     }}</p>

<a href="edit/{{$product->id}}" class="btn btn-info btn-md">Edit</a>
<a href="delete/{{$product->id}}" class="btn btn-danger btn-md">Delete</a>

</div>
</div>
</div>
</div>
</div>
</div>
@endforeach
</div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
