<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}"
        method="POST"
        enctype="multipart/form-data">
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

        <img src="{{ asset('storage/' . $product->image) }}"
        width="100"
        alt="{{ $product->name }}">

        <div class="mb-3">
        <label for="image">Product Image</label>
        <input type="file"
        name="image"
        id="image" 
        class="form-control"
        accept="image/*">
        
        <button type="submit">Update Product</button>

    </form>

</body>
</html>
</html>