<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\OrderResource;
use App\Models\Order;

class OrderController extends Controller
{
    //Display all products
    public function orders() {
        return OrderResource::collection(Order::all());
    }

    //Show individual order details
    public function order_details($order_id){
        return Order::where('id', $order_id)->get();
    }

    //Place order based on order ID
    public function place_order(Request $request, $order_id) {

        $order = Order::where('id', $order_id)->first();
        
        $request->validate([
            'quantity' => 'required|numeric'
        ]);

        //Check if the product has stocks
        if($order->stocks != 0){

            //check if the request quantity is greater in stocks 
            if($request->quantity > $order->stocks){
                return response()->json([
                    'message' => "Only ".$order->stocks." stocks available."
                ]);
            }else{
                //deduct stocks
                $currentStock = $order->stocks - $request->quantity;

                //update current stock
                $updateStock = Order::where('id',$order_id)->update(['stocks'=> $currentStock]);

                return response()->json([
                    'message' => 'You have successfully ordered this product.',
                ]);
            }
        }else{
            return response()->json([
                'message' => 'Failed to order this product due to unavailability of stock.',
            ]);
        }
    }
}
