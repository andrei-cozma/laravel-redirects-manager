<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParseImportController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
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

            return view('parse_import', compact('urls'));
        } else {
            return redirect()->back();
        }
    }
}
