<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.auth-register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerproses(Request $request)
    {
        $request->validate([
            'name'=>['required','min:4','max:50'],
            'email'=>['required','email','unique:users','max:50'],
            'password'=>['required','max:50'],
            'current_password'=>['required','max:50'],
        ]);

        if($request->current_password != $request->password){
            return redirect()->back()->with('message', 'Periksa password');
        }else{
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'role'=>"admin",
                'password'=>bcrypt($request->password),
                'remember_token'=>Str::random(60),
            ]);
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.auth-login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function loginproses(Request $request)
    {
        $request->validate([
            'email'=>['required','email','min:7','max:50'],
            'password'=>['required','min:7','max:50'],
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/');
        }else{
            return redirect()->back()->with('message','Periksa Email Dan Password');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
