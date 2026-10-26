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
        return view('products.index');
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
    // 1. Get data from the form
    $name = $request->input('name');
    $price = $request->input('price');

    // 2. Define the JSON file path
    $path = storage_path('app/product.json');

    // 3. Read existing data
    $data = file_get_contents($path);

    // 4. Convert JSON into a PHP array
    $products = json_decode($data, true) ?? [];

    // 5. Add the new product
    $products[] = [
        'id' => count($products) + 1,
        'name' => $name,
        'price' => $price,
    ];

    // 6. Convert array to JSON and save it
    file_put_contents(
        $path,
        json_encode($products, JSON_PRETTY_PRINT)
    );

    // 7. Show the saved data
    return $products;
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
    public function edit(string $id)
    {
        return view('products.edit');
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
