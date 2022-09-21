<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('product.product',['productList'=>$product]);
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function create(Request $request)
    {
        $input = $request->all();

        $user = User::find($input['user_id']);

        $product = $user->products()->create($input);

        return $product;
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $product = Product::find($id);
        $product->update($input);

        return $product;
    }

    public function delete($id)
    {
        $product = Product::find($id);

        return $product->delete();
    }

    public function productUser($id)
    {
        $productUser = User::find($id)->products;

        return $productUser;
    }
}
