<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{    
    
    public function index() 
 {
//     $data = [
//             'msg'=>'お名前を入力してください。'
// ];
    return view('hello.index');
}

public function post(Request $request)
{
    // $msg = $request->msg;
    // $data = [
    //     'msg' => 'こんにちは、' . $msg . 'さん！'
    // ];
    return view('hello.index',['msg' => $request -> msg]);
    }
}    

// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body{font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Index</h1>
//     <p>これは、Helloコントローラのindexアクションです。</p>
// </body>
// </html>
// EOF;

//     }
