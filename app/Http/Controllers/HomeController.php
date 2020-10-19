<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if(!isset($_GET["q"]) || $_GET["q"] == null){
            $noticias = DB::table("noticias")->where("user_id", "=", auth()->user()->id)->orderByDesc("created_at")->get();
        }else{
            $noticias = DB::table("noticias")->where("titulo", "like", "%".$_GET['q']."%")->orderByDesc("created_at")->get();
        }
        return view('dashboard', compact("noticias"));
    }
}
