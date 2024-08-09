<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function login(Request $request)
  {
    $test = $request->only(['name', 'email', 'password']);
    return view('login', ['test' => $test]);
  }
}