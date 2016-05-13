<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 5/13/16
 * Time: 8:02 PM
 */
namespace App\Http\Controllers;

use App\Checkout;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{


    public function index()
    {

        $Checkout = Checkout::all();

        return response()->json($Checkout);

    }

    public function getCheckout($id)
    {

        $Checkout = Checkout::find($id);

        return response()->json($Checkout);
    }

    public function createCheckout(Request $request)
    {

        $Checkout = Checkout::create($request->all());

        return response()->json($Checkout);

    }

    public function deleteCheckout($id)
    {
        $Checkout = Checkout::find($id);
        $Checkout->delete();

        return response()->json('deleted');
    }

    public function updateOrder(Request $request, $id)
    {
        $Order = Checkout::find($id);
        $Order->book_id = $request->input('book_id');
        $Order->user_id = $request->input('user_id');
        $Order->order_type = $request->input('order_type');
        $Order->order_date = $request->input('order_date');
        $Order->save();

        return response()->json($Order);
    }

}