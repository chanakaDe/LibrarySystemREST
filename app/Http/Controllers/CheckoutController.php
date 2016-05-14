<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 5/13/16
 * Time: 8:02 PM
 */
namespace App\Http\Controllers;

use App\Checkout;
use App\Book;
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

    public function createBookCheckout(Request $request)
    {
//      Saving new checkout.
        $Checkout = Checkout::create(['book_id' => $request->input('book_id'),
            'user_id' => $request->input('user_id'),
            'checkout_type' => $request->input('checkout_type'),
            'due_date' => $request->input('due_date'),
            'note' => $request->input('note')
        ]);

//      Updating book available count.
//        $Book = Book::where('book_id', '=', $request->input('book_id'));
//        $Book->available_copies =  $Book->available_copies-1;
//        $Book->save();

        return response()->json($Checkout);

    }

    public function deleteCheckout($id)
    {
        $Checkout = Checkout::find($id);
        $Checkout->delete();

        return response()->json('deleted');
    }

    public function updateCheckout(Request $request, $id)
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