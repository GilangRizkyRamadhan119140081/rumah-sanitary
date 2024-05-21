<?php

namespace App\Http\Controllers\Sanitary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Gallery;
use App\Models\Banner;
use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\TopProduk;
use App\Models\SellingProduk;
use App\Models\FeaturedProduk;
use App\Models\DiskonProduk;
use App\Models\Faq;
use App\Models\GtagManager;
use App\Models\Analytics;
use App\Models\TagManager;
use App\Models\SearchConsole;
use App\Models\Kontak;
use App\Models\Logo;
use App\Models\Page;
use App\Models\SocialMedia;

class HomeController extends Controller
{
    public function index()
    {
        $category = KategoriProduk::latest()->get();
        $gallery = Gallery::latest()->get();
        $banneratas = Banner::where('posisi', 'Atas')->latest()->get();
        $bannertengah = Banner::where('posisi', 'Tengah')->latest()->get();
        $latestBlogs = Blog::where('status', 'Publish')->latest()->take(3)->get();
        $latestProduct = Produk::with('kategori_produk')->with('sales_produk')->latest()->take(6)->get();
        $newProducts = Produk::with('kategori_produk')->with('sales_produk')->latest()->take(10)->get();
        $topProducts = TopProduk::with('data_produk', 'data_produk.kategori_produk', 'data_produk.sales_produk')->latest()->take(6)->get();
        $sellingProducts = SellingProduk::with('data_produk', 'data_produk.kategori_produk', 'data_produk.sales_produk')->latest()->get();
        $featuredProducts = FeaturedProduk::with('data_produk', 'data_produk.kategori_produk', 'data_produk.sales_produk')->latest()->get();
        $diskonProducts = DiskonProduk::with('data_produk', 'data_produk.kategori_produk', 'data_produk.sales_produk')->latest()->get();
        $brand = Brand::take(8)->get();
        $faqs = Faq::get();
        $footer = Kontak::first();
        $icon = Logo::get();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();
        $pages = Page::find(1);

        return view('sanitary.home.index', compact('latestBlogs', 'category', 'newProducts', 'latestProduct', 'topProducts', 'featuredProducts', 'sellingProducts', 'diskonProducts', 'brand', 'gallery', 'banneratas', 'bannertengah', 'footer', 'faqs', 'icon', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'pages', 'shopee', 'tokopedia'));
    }
}
