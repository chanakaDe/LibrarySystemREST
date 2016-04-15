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

    public function loginUser(Request $request)
    {
        $email = $request->input('email');
        $hashed_password = ""; //want to get password from SQL according to user email and do following check.
        if (hash_equals($hashed_password, crypt($request->input('password'), $hashed_password))) {
            echo "Password verified!";
        }
    }

}
