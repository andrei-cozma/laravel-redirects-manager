<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Url $url)
    {
        $url->new_url = $request->get('new_url');
        $url->save();
        if ($request->get('action') == 'save_and_next') {
            $next = Url::where('id', '>', $url->id)->min('id');
            return redirect('/'.$next.'/edit');
        } else {
            return redirect()->back();
        }
    }
}
