<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UrlController extends Controller
{
    public function index()
    {
        $urls = Url::simplePaginate(10);

        return view('index', compact('urls'));
    }

    public function edit(Url $url)
    {
        $next = Url::where('id', '>', $url->id)->min('id');

        return view('url.edit', compact('url', 'next'));
    }

    public function update(Request $request, Url $url)
    {
        $url->new_url = $request->get('new_url');
        $url->save();
        if ($request->get('action') == 'save_and_next') {
            $next = Url::where('id', '>', $url->id)->min('id');
            return redirect('/url/'.$next.'/edit');
        } else {
            return redirect()->back();
        }
    }

    public function import()
    {
        return view('url.import');
    }

    public function parseImport(Request $request)
    {
        $path = $request->file('file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        if (count($data) > 0) {
            $urls = [];
            foreach ($data as $row) {
                $urls[] = ['url' => $row[0]];
            }
            DB::table('import_urls_temp')->truncate();
            DB::table('import_urls_temp')->insert($urls);
            $urls = DB::table('import_urls_temp')->get();

            return view('url.parse_import', compact('urls'));
        } else {
            return redirect()->back();
        }
    }

    public function processImport()
    {
        $tempUrls = DB::table('import_urls_temp')->get();
        if (count($tempUrls) > 0) {
            $urls = [];
            foreach ($tempUrls as $tempUrl) {
                $urls[] = [
                    'old_url' => $tempUrl->url,
                    'created_at' => new \DateTime(),
                    'updated_at' => new \DateTime()
                ];
            }
            DB::table('urls')->insert($urls);
            DB::table('import_urls_temp')->truncate();

            return redirect('/');
        } else {
            return redirect()->back();
        }
    }
}
