<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>
	<h1>Product List</h1>
	<a href="index">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Brand</td>
			<td>Price</td>
			<td>Category</td>
			<td>Owner</td>
			<td>ACTION</td>
		</tr>

	 @foreach($product as $s)
		<tr>
			<td>{{$s->product_name}}</td>
			<td>{{$s->brand}}</td>
			<td>{{$s->price}}</td>
			<td>{{$s->category}}</td>
			<td>{{$s->added_by}}</td>
			<td>
				<a href="{{route('admin.ban', $s->id)}}">Edit</a> 
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>