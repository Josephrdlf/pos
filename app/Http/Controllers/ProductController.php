<?php

namespace App\Http\Controllers;
use App\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function companyproduct (Request $request){
        $product = Product::where('company_id', $request->id)->get();
        return ProductResource::collection($product);
    }

    public function productshow (Request $request){
        $product = Product::where('id', $request->id)->first();    
        return new ProductResource($product);
    }

    public function edit_product (Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'stock' => 'required|string|max:255',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $product = Product::find($request->pid);
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->save();
        $response = ['proudct' => $product];
        return response($response, 200);
    }

    public function create_product (Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'stock' => 'required|string|max:255',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $product = product::create($request->toArray());
        $response = ['proudct' => $product];
        return response($response, 200);
    }

    public function delete_product (Request $request){
        $product = Product::find($request->id);
        $product->delete();
        $response =  ['message' => 'User Have Been Successfully Deleted!'];
        return response($response, 200);
    }
}
