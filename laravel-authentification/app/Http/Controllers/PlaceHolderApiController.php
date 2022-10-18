<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceHolderApiController extends Controller
{
    public function index()
    {
        $responses = Http::get('https://jsonplaceholder.typicode.com/posts');
        $datas = $responses->json();

        return view('placeHolderApi.index', compact('datas'));
    }
}
