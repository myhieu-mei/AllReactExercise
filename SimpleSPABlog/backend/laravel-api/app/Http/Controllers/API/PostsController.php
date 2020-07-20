<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index(){
        $posts = DB::table("posts")->get();
        return $posts;
       }
       function detail($id){
        $detailPosts = DB::table("posts")->where('id',$id)->get();
        return $detailPosts;
       }
}
