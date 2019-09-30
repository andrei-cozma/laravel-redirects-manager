<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function importForm()
    {
        return view('url.import_form');
    }

    public function importSave(Request $request)
    {

        $path = $request->file('file')->store('imported_urls');

        dd($path);
    }
}
