<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  // indexアクションメソッドを定義
  public function index()
  {
    // ビューにパラメータを渡す
    $item = [
      'content' => 'パラメータを渡す',
    ];
    // view関数を呼び出して、ビューを指定している
    return view('index', $item); // 第１引数：表示するテンプレートファイル名, 第２引数：ビューに渡すパラメータ（連想配列）
  }
}
