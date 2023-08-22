<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, Product $product)
    {

        $categories = Category::find($request->category_id);
        // dd($categories->id);
        $product->product_name = $request->product_name;
        $product->product_slug = Str::slug($request->product_name);
        $product->product_price = $request->product_price;

        $categories->products()->save($product);
        // dd($categories->product_name);
        return redirect()->route('product.index')->with('message','Product Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product = Category::find($request->category_id)
                                ->products()->where('id',$product->id)->first();
        // dd($categories->id);
        $product->product_name = $request->product_name;
        $product->product_slug = Str::slug($request->product_name);
        $product->product_price = $request->product_price;

        $product->update();

        // $category = Category::find($request->category_id);

        // $category->products()->where('id',$product->id)->update([
        //     'product_name'=>$request->product_name,
        //     'product_price'=>Str::slug($request->product_name),
        //     'product_price'=>$request->product_price,
        // ]);


        // dd($product);
        return redirect()->route('product.index')->with('message','Product Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('message','Product Deleted!');
    }
}
