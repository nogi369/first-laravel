<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  // public function index($room, $id)
  public function index()
  // public function index($text = "Goodmorning")
  // indexアクションメソッドを定義
  // public function index($text)
  // public function index($text = "デフォルト") // パスパラメータを受け取る
  // public function index(Request $request)
  {
    // ビューにパラメータを渡す
    $item = [
      // 'param' => $text
      // 'param1' => $room,
      // 'param2' => $id
      'content' => '本文',
      // 'content' => 'パラメータを渡す',
      // 'param' => $text // ビューに渡す連想配列にパスパラメータの値を含める
      // 'param' => $request->text
    ];
    // view関数を呼び出して、ビューを指定している
    return view('index', $item); // 第１引数：表示するテンプレートファイル名, 第２引数：ビューに渡すパラメータ（連想配列）
  }
}
