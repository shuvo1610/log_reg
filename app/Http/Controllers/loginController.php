<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function create()
    {
        return view('auth.reg');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        $input['password']= Hash::make($request->password);
        $user=User::create($input);
        $details = [
            'title'=>'Verified Your Mail ',
            'user'=>User::create($input)
        ];
        Mail::to('spagreen@gmail.com')->send(new \App\Mail\User($details));
        return back();
    }

    public function login()
    {
        return view('auth.login');
    }

    public function Verified($id)
    {
        $user=User::find($id);
        $data=[
            'email_verified_at'=>now()
        ];
        $user->update($data);
        return redirect()->route('auth.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('auth.dashboard')->withSuccess('You have Successfully login');
        }

        return redirect("auth.login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function dashboard()
    {

        if(Auth::check()){
            return view('auth.dashboard');
        }

        return redirect("auth.login")->withSuccess('Opps! You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
