<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //SHOWS ADD NEW PRODUCT PAGE
    public function products(){
        return view('admin.product.add-product');
    }


    // STORES NEW PRODUCT
    public function storeProducts(Request $request){
        $product = $request->validate([
            'name'=> 'required',
            'quantity' => 'nullable',
            'price' => 'required',
            'description' => 'required',
            'image1' => 'required|max:1024',
            'image2' => 'required|max:1024',
            'category' => 'required',
            'quote' => 'nullable',
        ]);

        if($request->hasFile('image1')){
            $product['image1'] = $request->file('image1')->store('products', 'public');
        }

        if($request->hasFile('image2')){
            $product['image2'] = $request->file('image2')->store('products', 'public');
        }

        Product::create($product);
        return back()->with('message', 'Product Added');
    }


    // SHOWS ALL ADDED PRODUCTS
    public function allProducts(){
        $products = Product::all();
        return view('admin.product.all-product', [
            'products' => $products
        ]);
    }


    // SHOWS EDIT PRODUCT FORM
    public function editProducts(Product $productId){
        return view('admin.product.edit-product', [
            'product' => $productId
        ]);
    }


    // DELETES SINGLE PRODUCT
    public function deleteProducts(Product $productId){
        $productId->delete();
        return back();
    }


    // EDITS A SINGLE PRODUCT
    public function editSingleProduct(Product $productId, Request $request){
        $product = $request->validate([
            'name'=> 'required',
            'quantity' => 'nullable',
            'price' => 'required',
            'description' => 'required',
            'image1' => 'max:1024',
            'image2' => 'max:1024',
            'category' => 'required',
            'quote' => 'nullable',
        ]);

        if($request->hasFile('image1')){
            $product['image1'] = $request->file('image1')->store('products', 'public');
        }

        if($request->hasFile('image2')){
            $product['image2'] = $request->file('image2')->store('products', 'public');
        }

        $productId->update($product);
        return back();
    }

    // SHOWS SINGLE PRODUCT
    public function showProducts(Product $productId){
        return view('admin.product.single-product', [
            'product' => $productId
        ]);
    }

}
