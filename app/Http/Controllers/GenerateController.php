<?php

namespace App\Http\Controllers;

use App\Url;

class GenerateController extends Controller
{
    public function __invoke()
    {
        $result = "################## Redirects ####################\n";
        $redirects = Url::whereNotNull('new_url')->get();
        foreach ($redirects as $redirect) {
            $result .= 'Redirect 301 ' . $redirect->old_url . ' ' . $redirect->new_url . "\n";
        }
        $result .= '############### End of redirects ###################';

        return view('generate', compact('result'));
    }
}
