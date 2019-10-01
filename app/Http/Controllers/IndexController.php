<?php

namespace App\Http\Controllers;

use App\Url;

class IndexController extends Controller
{
    public function __invoke()
    {
        $urls = Url::simplePaginate(10);

        return view('index', compact('urls'));
    }
}
