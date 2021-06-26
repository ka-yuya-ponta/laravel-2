<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
 public function index(Request $request)
 {
     return view('Hello.index',['txt'=>'フォームを入力']);
 }
 public function post(Request $request)
 {
     $validate_rule=[
         'name'=>'required',
         'email'=>'email',
         'age'=>'numericlebetween:0,150'
     ];
     $this->validate($request,$validate_rule);
     return view('Hello.index',['txt'=>'正しい入力です']);
 }


}
