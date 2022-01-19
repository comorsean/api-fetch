<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index()
    {
        $baseUrl = env('COS_BASE_URI_URL');
        $posts = Http::get($baseUrl)->json();
        $collection = collect($posts);
        $uniqueUserId = $collection->unique('userId');
        $countUnique = $collection->countBy('userId');
        //dump($data);
        if(!$posts)
            return back()->with('error', 'no posts received');
        return view('index', [
            'uniqueUserId' => $uniqueUserId,
            'countUnique' => $countUnique
        ]);
    }
    public function show($id)
    {
        $baseUrl = env('COS_BASE_URI_URL');
        $data = Http::get($baseUrl)->json();
        $collection = collect($data)->where('userId', $id);


        if(!$data)
            return back()->with('error', 'no data received');
        return view('show', [
            'collections' => $collection,
            'id' => $id
        ]);
    }
}
