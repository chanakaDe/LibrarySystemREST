<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 5/14/16
 * Time: 9:06 PM
 */

namespace App\Http\Controllers;

use App\Checkin;
use App\Checkout;
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CheckinController extends Controller
{

    public function index()
    {

        $Checkin = Checkin::all();
        return response()->json($Checkin);

    }

    public function getCheckin($id)
    {
        $Checkin = Checkin::find($id);
        return response()->json($Checkin);
    }

    /**This method has ability to create new Checkin and update the book available count.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createBookCheckin(Request $request)
    {
//      Saving new Checkin.
        $Checkin = Checkin::create(['book_id' => $request->input('book_id'),
            'user_id' => $request->input('user_id'),
            'checkout_date' => $request->input('checkout_date'),
            'due_date' => $request->input('due_date'),
            'note' => $request->input('note'),
            'handed_date' => $request->input('handed_date'),
            'late_charges' => $request->input('late_charges'),
            'checkout_id' => $request->input('checkout_id')
        ]);

//      Updating book available count.
        $Book = Book::where('book_id', '=', $request->input('book_id'))->get();
        $UpdateBook = Book::where('book_id', '=', $request->input('book_id'))
            ->update(['available_copies' => ($Book[0]->available_copies + 1)]);
        $Checkin->book_update_status = $UpdateBook;

//      Removing selected checkout.
        $Checkout = Checkout::find($request->input('checkout_id'));
        $Checkout->delete();

        return response()->json($Checkin);

    }

    /**Before removing Checkin, have to update the book count(+1)
     * and un assign the user form that book Checkin.
     * As for now, this is not a essential feature.
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteCheckin($id)
    {
//        $Checkin = Checkin::find($id);
//        $Checkin->delete();

//        return response()->json('deleted');
        return response()->json("Deprecated");
    }

    public function updateCheckin(Request $request, $id)
    {
//        $Order = Checkin::find($id);
//        $Order->book_id = $request->input('book_id');
//        $Order->user_id = $request->input('user_id');
//        $Order->order_type = $request->input('order_type');
//        $Order->order_date = $request->input('order_date');
//        $Order->save();

        return response()->json("Deprecated");
    }

}