<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
    	$data = DB::table("Laraples")->get();
    	return view("home",["Laraples" => $data]);
    }

    // View Create Data
    public function create()
    {
    	return view("create");
    }

    public function input(Request $request)
    {
    	DB::table("Laraples")->insert([
    		"nama" => $request->nama,
    		"asal" => $request->asal
    	]);

    	return redirect("/home");
    }

}
