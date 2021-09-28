<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Resources\OrderDetailResource;

class TransactionController extends Controller
{
    public function add_cart (Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'ref' => 'required',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $product = Product::where('id', $request->id)->first();
        $qty = 1;
        $order_detail = OrderDetail::create([
            'reference' => $request->ref,
            'product_id' => $product->id,
            'qty' => $qty,
            'price' => $product->price,
        ]);
        $response = ['order_detail' => $order_detail];
        return response($response, 200);
    }

    public function show_cart (Request $request){
        $validator = Validator::make($request->all(), [
            'ref' => 'required',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $cart = OrderDetail::where('reference', $request->ref)->get();    
        return OrderDetailResource::collection($cart);
    }
}
