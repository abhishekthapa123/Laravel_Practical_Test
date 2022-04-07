<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('Product_form', compact('category'));
    }
    public function store(Request $request)
    {
        $category = Category::find($request->category_id);
        $product  = new Product();
        $product->product_name = $request->product_name;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/images/', $filename);
            $product->image = $filename;
        } else {
            return  $request;
            $product->image = '';
        }


        $category->product()->save($product);
        return redirect('product_form');
    }
    public function show()
    {
        $product = Product::with('category')->get();
        return view('list_product', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::with('category')->where('id', $id)->get();
        $category = Category::all();
        return view('edit_productform', compact('product', 'category'));
    }

    public function update(Request $request)
    {
        $category = Category::find($request->category_id);
        $product = Product::find($request->id);
        $product->product_name = $request->product_name;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/images/', $filename);
            $product->image = $filename;
        } else {
            return  $request;
            $product->image = '';
        }

        $category->product()->save($product);
        return redirect('listproduct');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('listproduct');
    }
}
