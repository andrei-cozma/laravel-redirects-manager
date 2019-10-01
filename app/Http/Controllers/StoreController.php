<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $url = new Url();
        $url->old_url = $request->get('old_url');
        $url->new_url = $request->get('new_url');
        $url->save();

        return redirect('/');
    }
}
