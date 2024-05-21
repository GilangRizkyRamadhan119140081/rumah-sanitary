<?php

namespace App\Http\Controllers\Sanitary;

use App\Http\Controllers\Controller;
use App\Models\Brosur;
use App\Models\Logo;
use App\Models\Kontak;
use App\Models\GtagManager;
use App\Models\Analytics;
use App\Models\CompanyProfile;
use App\Models\PriceList;
use App\Models\TagManager;
use App\Models\SearchConsole;
use App\Models\SocialMedia;

class DownloadController extends Controller
{

    public function indexBrosur()
    {
        $brosurs = Brosur::get();
        $icon = Logo::get();
        $footer = Kontak::first();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();

        info($brosurs);

        return view('sanitary.download.brosur', compact('brosurs', 'icon', 'footer', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'shopee', 'tokopedia'));
    }

    public function indexPricelist()
    {
        $pricelist = PriceList::get();
        $icon = Logo::get();
        $footer = Kontak::first();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();

        return view('sanitary.download.pricelist', compact('pricelist', 'icon', 'footer', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'shopee', 'tokopedia'));
    }

    public function indexCompanyprofile()
    {
        $companyprofile = CompanyProfile::get();
        $icon = Logo::get();
        $footer = Kontak::first();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();

        return view('sanitary.download.companyprofile', compact('companyprofile', 'icon', 'footer', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'shopee', 'tokopedia'));
    }
}
