<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function profile(User $user){
        return View('profile', ['user'=>$user]);
    }
    public function redirectRegister(){
        return View('register');
    }
    public function redirectLogin(){
        return View('login');
    }

    public function register(Request $request){
        $incomingFields = $request->validate(
            [
                'name' => ['required','min:3', 'max:200'],
                'email' => ['required', 'email'],
                'password' => ['required','min:8'],
            ]
            );
            $incomingFields['password'] = bcrypt($incomingFields['password']);
            $user = User::create($incomingFields);
            auth::login($user);
            return redirect('/');
    }
    public function logout(){
        auth::logout();
        return redirect('/');
    }
    public function login(Request $request){
        $incomingFields = $request->validate(
            [
                'loginemail' => ['required', 'email'],
                'loginpassword' => ['required'],
            ]
            );
            if(auth::attempt(['email'=> $incomingFields['loginemail'], 'password'=> $incomingFields['loginpassword']])){
                $request->session()->regenerate();
            }
            return redirect('/');
    }
    public function updateUser(Request $request, User $user){
        $incomingFields = $request->validate(
            [
                'name' => ['required','min:3', 'max:200'],
                'email' => ['required', 'email'],
            ]
            );
            $user = $user->update($incomingFields);
            // auth::login($user);
            return redirect('/profile/' . Auth::user()->id);
    }
    public function updatePassword(Request $request, User $user){
        $incomingFields = $request->validate(
            [
                'password' => ['required','min:8', 'max:200'],
            ]
            );
            $incomingFields['password'] = bcrypt($incomingFields['password']);
            $user = $user->update($incomingFields);
            return redirect('/profile/' . Auth::user()->id);
    }
}
