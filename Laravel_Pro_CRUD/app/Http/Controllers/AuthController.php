<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
class AuthController extends Controller
{
    public function handleLogin(Request $request)
    {
         // Validate the incoming login request
         $validatedData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication successful
             return redirect()->route('show.productions');
        } else {
            // Authentication failed
            return back()->withInput()->withErrors([
                'email' => 'These credentials do not match our records.'
              ]);
        }
    //     $datavalidation = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:6',
    //     ]);
    //     DB::beginTransaction();
    //     try
    //     {
    //         $credetials = [
    //             'email' => $request->email,
    //             'password' => $request->password,
    //         ];
    //         DB::commit();
    //         if(Auth::attempt($credetials))
    //         {
    //             return redirect()->route('home')->with('status', 'Register successfully');
    //         }
    //         else
    //         {
    //             return 21;
    //         }
    //     }
    //     catch( \Exception $error)
    //     {
    //         DB::rollback();
    //         return redirect()->back()->with('status', 'Register Failed');
    //     }

   }

   public function handleLogout()
   {
       Auth::logout();
       session()->flush();
       session()->regenerate();
       return redirect()->route('login');
   }
}
