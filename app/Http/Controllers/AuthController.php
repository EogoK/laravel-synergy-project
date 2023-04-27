<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

	
    public function postSignIn(Request $request)
    {
		
		if (! Auth::attempt($request->only('email', 'password')))
		{
            echo "<script>console.log('Вы ввели не правильный логин или пароль');</script>";
            return redirect("/login");
		}
		
	

		else {
		echo 'Вы успешно авторизовались';
    }
	}

    public function postRegister(Request $request){

        $name = $request->input("name");
        $surname = $request->input("surname");
        $email = $request->input("email");
        $patonymic = $request->input("patonymic");
        $passport = $request->input("passport");

        $password = Str::random(16);

        $user = User::create([
            'email'    => $email,
            'name'     => $name,
            'surname' => $surname,
            'password' => Hash::make($password),
            'patonymic' => $patonymic,
            'passport' =>  $passport
        ]);

        Auth::loginUsingId($user->id);

        Mail::send(`Ваш пароль {$password}`, ['user' => $user], function ($m) use ($user) {
            $message->from(env('MAIL_USERNAME'), 'Laravel');
            
            $message->to($user->email);
        });

        return redirect()->route('main')->view("main");
    }


    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}