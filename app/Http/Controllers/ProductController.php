<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        $productImage = $request->file('image')->store('public/product/image');
        $product->image = str_replace('public/','', $productImage);
        $product->save();
        return redirect()->route('product.index')->with('success', 'product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        if($request->file('image')){
            $product->image ? unlink('storage/'. $product->image) : '';
            $product->update([
                'image'=>str_replace('public/','', $request->file('image')->store('product/image','public'))
            ]);
        }
        $product->update($request->except('image'));
        return redirect()->route('product.index')->with('success', 'product updated successfully.');
    }

    public function destroy(Product $product)
    {
        if($product->image){
            unlink('storage/'. $product->image);
        }
        $product->delete();
        return redirect()->route('product.index')->with('success', 'product deleted successfully.');
    }
}
