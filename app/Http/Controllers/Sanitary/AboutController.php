<?php

namespace App\Http\Controllers\Sanitary;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\History;
use App\Models\Kontak;
use App\Models\Logo;
use App\Models\Statement;
use App\Models\GtagManager;
use App\Models\Analytics;
use App\Models\TagManager;
use App\Models\SearchConsole;
use App\Models\Page;
use App\Models\SocialMedia;

class AboutController extends Controller
{

    public function index()
    {
        $about= About::first();
        $history= History::all();
        $first_statement = Statement::where('id', 1)->first();
        $second_statement = Statement::where('id', 2)->first();
        $footer= Kontak::first();
        $icon= Logo::get();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();
        $pages = Page::find(5);
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        return view('sanitary.home.about', compact('footer', 'about', 'history','first_statement','second_statement', 'icon', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'pages', 'shopee', 'tokopedia'));
    }

}
