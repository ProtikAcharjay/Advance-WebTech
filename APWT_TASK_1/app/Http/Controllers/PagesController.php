<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $message = "Welcome to first task";
        return view('hello')->with('message', $message);
    }

    public function profile(){
        $name = "Mr. x";
        $id="11-11111-1";
        $dob = "10-10-2010";
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('profile')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);
}
public function contactus(){
    $owner= "Protik Acharjay";
    $contactno="01798141488";
    $owneremail="protik7777777@gmail.com";
    return view('contactus')
    ->with('owner', $owner)
    ->with('contactno', $contactno)
    ->with('owneremail', $owneremail);
}
public function aboutus(){

        return view('aboutus');
}
public function teams(){

    $teammembers=array("Protik", "Shojib", "Oscar","Prity");
    return view('teams')->with('teammembers', $teammembers);
}
public function services(){

    $provider=array("UI/UX design", "SEO", "Animation","Web Application","Mobile Application");
    return view('services')->with('provider', $provider);
}

}
