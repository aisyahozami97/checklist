<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
//use App\Models\User;
use Auth;
use Hash;
use AuthenticatesUsers;

class AuthController extends Controller
{
  //protected $redirectTo = '/home';

    public function register()
    {

      return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            //'password' => Hash::make($request->password),
            'password' => $request->password,
        ]);

        return redirect('home');
    }

    public function login()
    {

      return view('auth.login');
    }

    public function authenticate(Request $request)
    {
      
      
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            //'email'=>$request->get('email'),
            //'password'=>bcrypt($request->get('password'))
        ]);

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {

          //if(Auth::user()->is_admin !== 1){
            return redirect()->intended('home');
         // }
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    

     //Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]*/

      }


    public function logout() {
      Auth::logout();

      return redirect('login');
    }

    public function home()
    {
      return view('home');
    }
}