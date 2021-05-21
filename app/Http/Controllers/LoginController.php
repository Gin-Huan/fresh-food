<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(array('error' => $validator->errors()->first(), 'input_data' => $request->all()));
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // Authentication passed...
            return redirect('login');
        }
        Auth::login($user);

        return redirect('/cart');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required',
            // 'gender' => 'required',
            // 'phone' => 'required|unique:users',
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(array('error' => $validator->errors()->first(), 'input_data' => $request->all()));
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['role_id'] = 2;
        $user = User::create($input);
        Auth::login($user);
        return redirect('login')->with('success', 'Success!');
    }
}