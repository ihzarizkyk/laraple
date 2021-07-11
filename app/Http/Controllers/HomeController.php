<?php
/*
Author : Mochammad Ihza Rizky Karim
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Laraple;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $relation = Laraple::all();
        $hasMany = Auth::user()->articles()->get();
        $randomdata = DB::table("_laraples")->inRandomOrder()->get();
        if($relation->count() > 0)
        {
         return view("home",["_laraples" => $relation,"random" => $randomdata,"articles" => $hasMany]);    
        }else{
            abort(404);
        }
    	
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

        $namagmbr = $request->file('gambar')->getClientOriginalName();

        $request->gambar->move(public_path("gambar"),$namagmbr);

        // Masukkan Data
    	DB::table("_laraples")->insert([
            "gambar" => $namagmbr,
    		"nama" => $request->nama,
            "slug" => Str::slug($request->nama,"-"),
    		"asal" => $request->asal
    	]);

    	return redirect("/");
    }

    // Delete data
    public function delete(Laraple $laraple)
    {
        $this->authorize("del",$laraple);
        $data = Laraple::find($laraple->id);
        $data->delete();

        return redirect("/");
    }

    // Edit data
    public function edit(Laraple $laraple)
    {
        $this->authorize("v_edit",$laraple);
        $data = DB::table("_laraples")->where("slug",$laraple->slug)->get();
        return view("edit",["_laraples" => $data]);
    }

    // Update Data
    public function update(Request $request)
    {
        DB::table("_laraples")->where("id",$request->id)->update([
            "nama" => $request->nama,
            "asal" => $request->asal
            ]);

        return redirect("/");
    }

    public function show($slug)
    {
        $data = Laraple::find($slug);
        return view("show",["records" => $data]);
    }

}
