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
    	$data = DB::table("_laraples")->get();
    	return view("home",["_laraples" => $data]);
    }

    // View Create Data
    public function create()
    {
    	return view("create");
    }

    // insert data
    public function store(Request $request)
    {

        // Validasi Dulu
        // syarat | syarat | syarat
        $request->validate([
        "gambar"=> "required|mimes:jpg,jpeg,png|max:1024",
        "nama"=> "required|min:5|max:40",
        "asal"=> "required|min:3|max:20"]);

        $namagmbr = $request->gambar->getClientOriginalName();

        $request->gambar->move(public_path("gambar"),$namagmbr);

        // Masukkan Data
    	DB::table("_laraples")->insert([
            "gambar" => $namagmbr,
    		"nama" => $request->nama,
    		"asal" => $request->asal
    	]);

    	return redirect("/home");
    }

    // Delete data
    public function delete($id)
    {
        DB::table("_laraples")->where("id",$id)->delete();

        return redirect("/home");
    }

    // Edit data
    public function edit($id)
    {
        $data = DB::table("_laraples")->where("id",$id)->get();
        return view("edit",["_laraples" => $data]);
    }

    // Update Data
    public function update(Request $request)
    {
        DB::table("_laraples")->where("id",$request->id)->update([
            "nama" => $request->nama,
            "asal" => $request->asal
            ]);

        return redirect("/home");
    }

}
