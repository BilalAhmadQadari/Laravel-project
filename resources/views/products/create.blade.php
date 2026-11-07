<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProducts</title>
</head>
<body>
<h1>this is a page for adding a new product to the system.</h1>


<!DOCTYPE html>
<html>
<head>
    <title>Request Demo</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

		<h1>Add New Product</h1>

		<form action="{{ route('products.store') }}" method="POST">

				@csrf

				<label>Product Name:</label>
				<input type="text" name="name" required>

				<br><br>

				<label>Product Price:</label>
				<input type="number" name="price" step="0.01" required>

				<br><br>

				<button type="submit">Save Product</button>

		</form>

</body>
</html>

</body>
</html>
    
</body>
</html>