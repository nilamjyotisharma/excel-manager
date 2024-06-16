<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Log;




class AuthController extends Controller
{

    //Method to load the Register page
    public function getRegister(){
        return view('auth.register');
    }


    //Method to save data from the Register page
    public function registerPost(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|unique:users|email',
                'password'=>'required'
            ]
        );
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/dashboard')->with('success', 'Login Success');
        }

        return back()->with('success', 'Register successfully');
    }

    public function getLogin(){
        return view('auth.login');
    }

    

    public function loginPost(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        Log::info('attempts', [Auth::attempt($credentials)]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/dashboard')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }


    


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
