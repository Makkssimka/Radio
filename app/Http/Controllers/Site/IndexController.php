<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        $data['title'] = 'Radio site';
        return view('site.index', $data);
    }
}
