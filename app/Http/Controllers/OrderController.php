<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 4/12/16
 * Time: 8:47 AM
 */

namespace App\Http\Controllers;

use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class OrderController extends Controller
{


    public function index()
    {

        $Order = Order::all();

        return response()->json($Order);

    }

    public function getOrder($id)
    {

        $Order = Order::find($id);

        return response()->json($Order);
    }

    public function createOrder(Request $request)
    {

        $Order = Order::create($request->all());

        return response()->json($Order);

    }

    public function deleteOrder($id)
    {
        $Order = Order::find($id);
        $Order->delete();

        return response()->json('deleted');
    }

    public function updateOrder(Request $request, $id)
    {
        $Order = Order::find($id);
        $Order->book_id = $request->input('book_id');
        $Order->user_id = $request->input('user_id');
        $Order->order_type = $request->input('order_type');
        $Order->order_date = $request->input('order_date');
        $Order->save();

        return response()->json($Order);
    }

}