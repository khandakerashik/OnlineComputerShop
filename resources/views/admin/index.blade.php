<html>
    <head>
        <title>
            Home - Admin
        </title>
    </head>
    <body>
        <h1>Welcome Back, {{session('name')}}</h1>

        <table border="0">
		<tr>
        <tr>
			<td><a href="{{route('admin.userlist')}}">Users</a></td>
		</tr>
			<td><a href="{{route('admin.pending')}}">Pending requests</a></td>
		</tr>
		<tr>
			<td><a href="{{route('admin.home')}}">Home</a></td>
		</tr>
		<tr>
			<td><a href="{{route('product.add')}}">Add Product</a></td>
		</tr>
        <tr>
			<td><a href="{{route('admin.profile')}}">Profile</a></td>
		</tr>
        <tr>
			<td><a href="{{route('admin.products')}}">Products</a></td>
		</tr>
        <tr>
			<td><a href="/logout">Logout</a></td>
		</tr>
		<tr>
		</tr>
	</table>

    </body>


</html>