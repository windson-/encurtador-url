<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UrlShortener;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class UrlController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(Request $request)
    {
        UrlShortener::create([
            'url' => $request->input('slug'),
            'redirect' => $request->input('url'),
        ]);

        return response()->json(true, 200);
    }

    public function urls()
    {
        $exists = true;
        $hash = substr(hash('sha256', date('Y-m-d H:i:s')), 0, 6);
        while($exists == true) {
            $redirect = URL::to('/') . '/' . $hash;
            $unique = UrlShortener::where('redirect', $redirect)->first();
            if($unique == null) {
                $exists = false;
            } else {
                $hash = substr(hash('sha256', date('Y-m-d H:i:s')), 0, 6);
            }
        }

        $delete = UrlShortener::where('created_at', '<', Carbon::today()->subWeek())->get();
        foreach ($delete as $d) {
            $d->delete();
        }

        $urls = UrlShortener::orderBy('created_at', 'desc')->get();

        return response()->json(['urls' => $urls, 'hash' => $hash], 200);
    }
}
