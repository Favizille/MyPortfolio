<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Repository\Eloquent\LoginRepository;

class LoginController extends Controller
{
    protected $loginRepository;

    public function __construct(LoginRepository $loginRepository){}

    public function login(){
        return view("login");
    }

    public function loginAdmin(LoginRequest $request){
       if(!$this->loginRepository->login($request)){
            return redirect()->route('login')->withErrors("Login Credentials are invalid");
       }

       return redirect()->route("dashboard.admin");
    }
}
