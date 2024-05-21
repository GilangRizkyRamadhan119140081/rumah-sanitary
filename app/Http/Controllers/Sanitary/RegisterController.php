<?php

namespace App\Http\Controllers\Sanitary;

use App\Http\Controllers\Controller;
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

class RegisterController extends Controller
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

        return view('sanitary.auth.registrasi', compact('user', 'icon', 'footer', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'shopee', 'tokopedia'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }
}
