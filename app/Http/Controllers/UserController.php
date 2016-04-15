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
        $email = $request->input('email');
        $existingUser = User::where('email', '=', $email)->get()->toArray();
        if (count($existingUser) == 0) {
            $User = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'permission_level' => $request->input('permission_level'),
                'dob' => $request->input('dob'),
                'password' => password_hash($request->input('password'), PASSWORD_DEFAULT)
            ]);
            return response()->json($User);
        } else {
            return response()->json("Existing user");
        }
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
        $password = $request->input('password');
        $User = User::where('email', '=', $email)->get();
        $User = $User->makeVisible('password')->toArray();

        if (hash_equals($User[0]['password'], crypt($password, $User[0]['password']))) {
            echo "Password verified!";
        } else {
            echo "Login error";
        }

//        return response()->json($User);
    }

}
