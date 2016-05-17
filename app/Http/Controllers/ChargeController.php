<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 4/11/16
 * Time: 2:20 PM
 */


namespace App\Http\Controllers;

use App\Book;
use App\Charge;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ChargeController extends Controller
{

    public function index()
    {

        $Charge = Book::all();

        return response()->json($Charge);

    }

    public function getCharge($id)
    {
        $Charge = User::find($id);

        return response()->json($Charge);
    }

    public function getChargeByUser($user_id)
    {
        $Charge = Book::where('user_id', '=', $user_id)->get();

        return response()->json($Charge);
    }

}
