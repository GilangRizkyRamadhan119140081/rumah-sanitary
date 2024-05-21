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

class ProfileController extends Controller
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

        return view('sanitary.users.profile', compact('user', 'icon', 'footer', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'shopee', 'tokopedia'));
    }
}
