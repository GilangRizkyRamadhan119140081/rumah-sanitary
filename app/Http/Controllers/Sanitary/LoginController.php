<?php

namespace App\Http\Controllers\Sanitary;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Kontak;
use App\Models\GtagManager;
use App\Models\Analytics;
use App\Models\TagManager;
use App\Models\SearchConsole;
use App\Models\User;
use App\Models\SocialMedia;

class LoginController extends Controller
{

    public function index()
    {
        $user = User::get();
        $icon = Logo::get();
        $footer = Kontak::first();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();

        return view('sanitary.auth.login', compact('user', 'icon', 'footer', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'shopee', 'tokopedia'));
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Login successful. Welcome back!');
            // return redirect()->intended('/')->with('success', 'Login successful. Welcome back!');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function logoutUser(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sign-in');
    }


}
