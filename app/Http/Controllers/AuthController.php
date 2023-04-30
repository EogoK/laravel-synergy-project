<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;

use \stdClass;

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

		if (Auth::attempt($request->only('email', 'password')))
		{
            return redirect("/main");
		}
		
	

		else {
            return redirect('/login')->with("alert", "Неверный логин или пароль");
        }
	}

    public function postRegister(Request $request){

        $name = $request->input("name");
        $surname = $request->input("surname");
        $email = $request->input("email");
        $patonymic = $request->input("patonymic");
        $passport = $request->input("passport");

        $password = Str::random(16);
        
        if(User::where('email','=',$email)->count()){
            return redirect('/register')->with("alert", "Пользователь уже существует");
        }

        $user = User::create([
            'email'    => $email,
            'name'     => $name,
            'surname' => $surname,
            'password' => Hash::make($password),
            'patonymic' => $patonymic,
            'passport' =>  $passport
        ]);

        #Auth::loginUsingId($user->id);

        $data = new stdClass();
        $data->password = $password;
        $data->name = $name;
        $data->email = $email;
        Mail::to($data->email)->send(new sendMail($data));
        
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect("/main");
        }
    }


    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/login');
    }


    public function updateData(Request $request){

        $request->validate([
            'name' =>'required|string|max:255',
            'email'=>'required|email|string|max:255',
            'surname'=>'required|string|max:255',
            'patonymic'=>'required|string|max:255',
            'passport'=>'required|integer',
            'age'=>'nullable|integer',
            'book'=>'nullable|string|max:255',
            'university'=>'nullable|string|max:255',
            'status'=>'nullable|string|max:255',
            'bank_card'=>'nullable|string|max:255'
        ]);

        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->surname = $request["surname"];
        $user->patonymic  = $request["patonymic"];
        $user->passport = $request["passport"];

        $user->age = $request['age'];
        $user->book = $request['book'];
        $user->university = $request["university"];
        $user->status  = $request["status"];
        $user->bank_card  = $request["bank_card"];


        $user->update($request->all());


        return redirect("/profile");
    }
}