<?php
/*
Author : Mochammad Ihza Rizky Karim
*/
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

    // inser data
    public function input(Request $request)
    {
    	DB::table("Laraples")->insert([
    		"nama" => $request->nama,
    		"asal" => $request->asal
    	]);

    	return redirect("/home");
    }

    // Delete data
    public function delete($id)
    {
        DB::table("Laraples")->where("id",$id)->delete();

        return redirect("/home");
    }

    // Edit data
    public function edit($id)
    {
        $data = DB::table("Laraples")->where("id",$id)->get();
        return view("edit",["Laraples" => $data]);
    }

    // Update Data
    public function update(Request $request)
    {
        DB::table("Laraples")->where("id",$request->id)->update([
            "nama" => $request->nama,
            "asal" => $request->asal
            ]);

        return redirect("/home");
    }

}
