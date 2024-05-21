<?php

namespace App\Http\Controllers\Sanitary;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Backend\Blog\Blogs;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kontak;
use App\Models\Logo;
use App\Models\KategoriBlog;
use App\Models\GtagManager;
use App\Models\Analytics;
use App\Models\Page;
use App\Models\TagManager;
use App\Models\SearchConsole;
use App\Models\SocialMedia;
use App\Models\Tags;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        $category = KategoriBlog::all();

        $selectedCategories = $request->input('category');
        $blog = Blog::when($selectedCategories, function ($query, $selectedCategories) {
            return $query->where('kategori_id', $selectedCategories);
        })
        ->where('status', 'Publish') // Menambahkan kondisi where untuk status publish
        ->latest('created_at')
        ->paginate(6);

        $latestBlogs = Blog::where('status', 'Publish')->latest()->take(3)->get();
        $footer= Kontak::first();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $icon= Logo::get();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();
        $pages = Page::find(3);

        return view('sanitary.home.blog-list', compact('blog','selectedCategories', 'latestBlogs', 'category', 'footer', 'icon',  'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'pages', 'shopee', 'tokopedia'));
    }

    public function show($slug)
    {

        $blogDetail = Blog::where('slug', $slug)->firstOrFail();
        $latestBlogs = Blog::latest()->take(3)->get();
        $category = KategoriBlog::all();
        $footer= Kontak::first();
        $icon= Logo::get();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();
        $pages = Blog::where('slug', $slug)->firstOrFail();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $kategoriTags = Blog::with('fasilitas')->where('slug', $slug)->firstOrFail();
        $url = url()->current();

        return view('sanitary.home.blog-detail', compact('latestBlogs', 'blogDetail', 'category','footer', 'icon', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'pages', 'shopee', 'tokopedia', 'kategoriTags', 'url'));
    }

}
