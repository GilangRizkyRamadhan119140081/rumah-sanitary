<?php

namespace App\Http\Controllers\Sanitary;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Kontak;
use App\Models\Logo;
use App\Models\GtagManager;
use App\Models\Analytics;
use App\Models\TagManager;
use App\Models\SearchConsole;
use App\Models\SocialMedia;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function index()
    {
        $footer= Kontak::first();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $icon= Logo::get();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();
        $pages = Page::find(4);
        return view('sanitary.home.contact', compact('footer', 'icon',  'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'pages', 'shopee', 'tokopedia'));
    }

    public function store(Request $request)
    {
        info($request);

        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'subject' => 'required|string',
                'message' => 'required|string',
            ]);
            Feedback::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            Session::flash('success', 'Feedback telah berhasil dikirim.');
            return response()->json(['status' => 'success', 'message' => 'Review berhasil disimpan!']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
