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

    <h2>Add Product</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Product Name:</label>
        <input type="text" name="name" required>

        <br><br>

        <label>Price:</label>
        <input type="number" name="price"
               min="0" step="any" required>

        <br><br>

        <label>Active:</label>
        <input type="checkbox" name="active" value="1">

        <br><br>

        <label>Photo:</label>
        <input type="file" name="photo">

        <br><br>

        <button type="submit">Submit</button>

    </form>

</body>
</html>
    
</body>
</html>