<!-- Stored in resources/views/child.blade.php -->

@extends('frontend.layout')

@section('title', 'Cart')


@section('content')
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Your Cart</h2>
						<table class="tblone">
							<tr>
								<th width="20%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="25%">Quantity</th>
								<th width="20%">Total Price</th>
								<th width="10%">Action</th>
							</tr>
							<?php foreach ($cart as $value) 
								{
							?>
							<tr>
								<td>{{$value->name}}</td>
								<td><img src="images/uploads/{{Helper::product_info_by_id($value->id)->image}}" alt=""/></td>
								<td>Tk. {{$value->price}}</td>
								<td>
									<form action="" method="post">
										<input type="number" name="" value="{{$value->qty}}"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>Tk. {{$value->subtotal}}</td>
								<td><a href="">X</a></td>
							</tr>
							
							<?php } ?>
							
						</table>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Sub Total : </th>
								<td>TK. 210000</td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>TK. 31500</td>
							</tr>
							<tr>
								<th>Grand Total :</th>
								<td>TK. 241500 </td>
							</tr>
					   </table>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.html"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="login.html"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>

@endsection






