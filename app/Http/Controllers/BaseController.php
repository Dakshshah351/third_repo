<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about($name, $lname)
    {
        $fullName = $name." ".$lname;
        $college = "<h1> L.J. College </h1>";
        $student = ['Chhagan', 'gagan', 'Managan', ' chintu'];
        return view('about',compact('fullName','college', 'student'));
    }
    public function userInfo()
    {
        return view('userInfo');
    }
    public function userInfoCreate()
    {
        echo "On form Create";
    }
}