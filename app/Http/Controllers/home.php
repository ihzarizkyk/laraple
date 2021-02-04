<?php

// Read Data

// Configure Database .env file

// Buat Database laraple dan table Laraples

/*Struktur Table Laraples :

id int,
nama varchar(50),
asal varchar(50)

*/

// Restart Server

// Atur Routes Default ke HomeController@index

// Pakai query builder untuk menampilkan datanya

// beralih ke views home untuk foreach datanya

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index()
    {
    	$data = DB::table("Laraples")->get();
    	return view("home",["Laraples" => $data]);
    }

}
