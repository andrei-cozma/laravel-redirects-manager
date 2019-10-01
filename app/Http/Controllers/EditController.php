<?php

namespace App\Http\Controllers;

use App\Url;

class EditController extends Controller
{
    public function __invoke(Url $url)
    {
        $next = Url::where('id', '>', $url->id)->min('id');

        return view('edit', compact('url', 'next'));
    }
}
