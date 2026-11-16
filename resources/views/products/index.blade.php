<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        
			<h1>Products List</h1>
			@if(session('success'))
    		<p>{{ session('success') }}</p>
			@endif
			
			<a href="{{ route('products.create') }}">
				<button type="button">Add Product</button>
			</a>
			<form action="{{ route('logout') }}" method="POST">
				@csrf
				<button type="submit">Logout</button>
			</form>

			<table border="1" cellpadding="10">

				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Price</th>
						<th>image</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>

				<tbody>
					@foreach($products as $product)
						<tr>
							<td>{{ $product->id }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->price }}</td>
							<td>
								@if($product->image)
									<img src="{{ asset('storage/' . $product->image) }}" 
									alt="{{ $product->name }}"
									width="100"
									height="100"
									style="object-fit: cover;">
								@else
									No Image
								@endif
							</td>
							<td><a href="{{ route('products.edit', $product->id) }}">
        						Edit
   								</a>
							</td>
							<td>
								<form action="{{ route('products.destroy', $product->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>

    	</table>
	

</body>
</html>