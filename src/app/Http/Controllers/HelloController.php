<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
// indexアクションメソッドを定義
public function index()
{
  // view関数を呼び出して、ビューを指定している
   return view('hello'); // hello.phpを呼び出す
}
}
