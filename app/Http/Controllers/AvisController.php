<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    //
    public function add(Request $request){
       $post = new Avis();

       $post->title = "toto";
       $post->body = "toto description";

       $post->save();

       return response()->json(["result" => "ok"], 201);
    }
}
