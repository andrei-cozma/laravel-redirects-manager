<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UrlController extends Controller
{
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
