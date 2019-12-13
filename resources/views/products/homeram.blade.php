<!DOCTYPE html>
<html>
<head>
	<title>Ram</title>
</head>
<body>
	<h1>RAMs</h1>
	<a href="/login">Login</a> | 
	<a href="/registration">Registration</a>
	
	<table border="1">
		<tr><!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>RAM List</h1>
	<a href="/login">Login</a> | 
	<a href="/registration">Registration</a>
	
	<table border="1">
		<tr>
			<td>Ctagory</td>
			<td>Brand</td>
			<td>Product Name</td>
			<td>Added By</td>
			<td>Price</td>
			<td>ACTION</td>
		</tr>

	 @foreach($product as $s)
		<tr>
			<td>{{$s->category}}</td>
			<td>{{$s->brand}}</td>
			<td>{{$s->product_name}}</td>
			<td>{{$s->added_by}}</td>
			<td>{{$s->price}}</td>
			<td>
				<a href="{{route('addcart', $s->id)}}">Add To Cart</a> | 
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>
