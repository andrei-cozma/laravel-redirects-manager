<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StoreImportController extends Controller
{
    public function __invoke()
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
