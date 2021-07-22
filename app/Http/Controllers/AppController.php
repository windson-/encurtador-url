<?php
namespace App\Http\Controllers;

use App\Models\UrlShortener;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class AppController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = session('auth');

        if (empty($auth)) {
            return $this->login();
        } else {
            return $this->home();
        }
    }

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('index');
    }

    public function redirect($hash)
    {
        $item = UrlShortener::where('url', URL::to('/') . '/' . $hash)->first();
        if($item != null) {
            return Redirect::to($item['redirect']);
        } else {
            abort(404);
            return false;
        }
    }

    public function logoff()
    {
        session(['auth' => null]);

        return redirect()->route('index');
    }
}
