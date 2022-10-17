<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){

        $request->validate(
            [
            'email'=>'required|email',
            'password'=>'required'
            ]
    );

        // echo "<pre>" ;
        // print_r($request->all());

        $loginCombinations = array("protik7777777@gmail.com"=>"pro123", "shojib@gmail.com"=>"s123", "someone@gmail.com"=>"123");


if(isset($_POST['submit'])){
    $found = false;
    foreach($loginCombinations as $email => $password){
        if($_POST['email'] == $email && $_POST['password'] == $password){
            echo "Yes, user found!!";
            $found = true;
            break;
        }
    }

    if(!$found){
        echo "No user found!!";
    }

}
    }
}
