<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // Controller'dan view'a veri gördermek
        $age = 30;

        $person = new \stdClass();
        $person->age = $age;

        // return view("front.index", ['age' => $age]);
        // return view("front.index", compact("age"));
        // return view("front.index")->with('age',$age)->with("isim","RIFAT");
        // return view("front.index")->with('age', $age)->with("isim", "RIFAT");

        return view("front.index",compact("person"));
    }
    public function about()
    {
        return view("front.about");
    }

}
