<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    //dd('hit');
    public function create(){
        
       return view('auth.register');
    }

    public function store(){
        //dd(request()->all());
        $formData = request()->validate([
            'name'=>'required|max:255|min:3',
            'username'=> ['required','max:255','min:3',Rule::unique('users','username')],
            'email'=> ['required','email',Rule::unique('users','email')], //or ['required','email']
            'password'=> 'required|min:8'
        ]);

        //dd('success');
        $user=User::create($formData);

        auth()->login($user);
        //session()->flash('success','Welcome Dear, '.$user->name);
        return redirect('/')->with('success','Welcome Dear, '.$user->name);
        
       
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success','Goodbye');
    }

   public function login(){
    //dd('hit');
    return view('auth.login');
   }

    public function post_login(){
     //dd('hit');
     $formData = request()->validate([
          'email'=> ['required','email','max:255',Rule::exists('users','email')],//auto redirect to login page if email not found
          'password'=> ['required','min:8','max:255']
     ],['email.required'=>'We need your email address.',
                'password.min'=>'Password should be more than 8 characters.']
    );

     //dd($formData);

    if(auth()->attempt($formData)){
       
        return redirect('/')->with('success','Welcome Back ');
    }else{
        return redirect()->back()->withErrors(['email'=>'User Credendials Wrong']);
    }
   
    }
}
