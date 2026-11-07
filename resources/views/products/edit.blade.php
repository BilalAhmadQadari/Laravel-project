<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Product Name:</label>
        <input
            type="text"
            name="name"
            value="{{ $product->name }}"
            required
        >

        <br><br>

        <label>Product Price:</label>
        <input
            type="number"
            name="price"
            value="{{ $product->price }}"
            step="0.01"
            required
        >

        <br><br>

        <button type="submit">Update Product</button>

    </form>

</body>
</html>
</html>