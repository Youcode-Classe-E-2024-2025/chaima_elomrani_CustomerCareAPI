<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Services\AuthService;


class AuthController extends Controller
{
  private $authService ;

  public function __construct(AuthService $authService)
  {
    $this->authService = $authService;
  }

  public function register(Request $request){
    return $this->authService->register($request);
  }


  public function login(Request $request){

    $request->only(['email', 'password']);

    if($this->authService->login($request)){
        return redirect()->route('dashboard');
    }
    return redirect()->back()->withErrors(['email, password' => 'Invalid credentials']);
  }


 public function logout(Request $request){

    $this->authService->logout($request);

    return redirect()->route('login');
 }
  
} 


