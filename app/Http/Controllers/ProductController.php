<?php
namespace App\Models;
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
   
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);
    
    $validated['image'] = $request->file('image')->store('product_images', 'public');

    Product::create($validated);

    return redirect()->route('products.index')
        ->with('success', 'Product added successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('products.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
        $newImage = $request->file('image')->store('products', 'public');
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $validated['image'] = $newImage;

        }else {
            unset($validated['image']);
        }

        $product->update($validated);

        return redirect()->route('products.index')
        ->with('success', 'Product updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully!');
    }
}
