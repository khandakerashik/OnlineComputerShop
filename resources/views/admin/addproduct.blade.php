<!DOCTYPE html>
<html>

<head>
	<title>Add Product</title>
</head>
<body>
	<h1>Add Product</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{old('name')}}"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{old('price')}}"></td>
		</tr>
		<tr>
			<td>Brand</td>
			<td><input type="text" name="brand" value="{{old('brand')}}"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category" value="{{old('category')}}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save"></td>
			<td></td>
		</tr>
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach	
</body>
</html>



