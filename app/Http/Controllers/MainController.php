<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {
    public static function home() {
        return view('webpages.homepage');
    }

    public static function courses() {
        return view();
    }

    public static function departments() {
        return view();
    }

    public static function contact() {
        return view();
    }
}
