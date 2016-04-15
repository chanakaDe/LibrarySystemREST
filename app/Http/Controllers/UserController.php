<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 4/14/16
 * Time: 5:18 PM
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{


    public function index()
    {

        $Users = User::all();

        return response()->json($Users);

    }

    public function getUser($id)
    {

        $User = User::find($id);

        return response()->json($User);
    }

    public function createUser(Request $request)
    {
//        $hashed_password = crypt($request->input('password'), 'cs');
//        if (hash_equals($hashed_password, crypt("456", $hashed_password))) {
//            echo "Password verified!";
//        }

        $User = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'permission_level' => $request->input('permission_level'),
            'dob' => $request->input('dob'),
            'password' => crypt($request->input('password'), 'cs')
        ]);
        return response()->json($User);

    }

    public function deleteUser($id)
    {
        $User = User::find($id);
        $User->delete();

        return response()->json('deleted');
    }

//    public function updateBook(Request $request, $id)
//    {
//        $Book = User::find($id);
//        $Book->title = $request->input('title');
//        $Book->author = $request->input('author');
//        $Book->isbn = $request->input('isbn');
//        $Book->save();
//
//        return response()->json($Book);
//    }

}
