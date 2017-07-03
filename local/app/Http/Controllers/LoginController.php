<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
class LoginController extends Controller
{
    public function getLogin(){
        return view('login');
    }
    public function postLogin(Request $request){
    	$rules = [
            'email' =>'required|email',
            'password'=>'required|min:8'

    	];
    	$message=[
           'email.required'=>'Email la mot truong bat buoc',
           'email.email'=>'Email khong dung dinh dnag',
           'password.required'=>'Mat khau bat buoc',
           'password.min'=>'Mat khau it nhat 8 ki tu'
    	];
    	$validation = Validator::make($request->all(),$rules,$message);
    	if($validation->fails()){
               return redirect()->back()->withErrors($validation);
    	}else{
            $email = $request->input('email');
            $password = $request->input('password');
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
            	return redirect()->intended('/');
            }else{
            	$errors = new MessageBag(['errorlogin'=>'Email hoac mat khau khong dung']);
            	return redirect()->back()->withInput()->withErrors($errors);
            }
    	}
    }
}
