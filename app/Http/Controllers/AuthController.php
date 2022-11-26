<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
   public function login()
	{
		return view('auth.login');
	}


	public function proses_login(Request $request){
        //remember
        $ingat = $request->remember ? true : false; //jika di ceklik true jika tidak gfalse
        //akan ingat selama 5 tahun jika tidak logout

        if(auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $ingat)){
            //auth->user() untuk memanggil data user yang sudah login
        	
        	if(auth()->user()->role == "admin"){
        		return redirect()->route('index')->with('success', 'Anda Berhasil Login');
        	}
        }else {
            return redirect()->back()->with('error', 'Email / Password anda salah'); //route itu isinya name dari route di web.php
        }

    }


    public function register(Request $request){

		$user = User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' =>  bcrypt($request->password),
			'role' => $request->role

		]);


		if ($user) {
			
			$out = [
				"message" => "register_success",
				"user" => $user,
				"code"    => 201,
			];
		} else {
			$out = [
				"message" => "failed_regiser",
				"code"   => 400,
			];
		}

		return response()->json($out, $out['code']);
	}


	public function logout(){

        auth()->logout(); //logout
        
        return redirect()->route('login')->with('success', 'Anda Berhasil Logout');
        
    }}
