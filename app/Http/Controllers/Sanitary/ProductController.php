<?php

namespace App\Http\Controllers\Sanitary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\Kontak;
use App\Models\Logo;
use App\Models\TopProduk;
use App\Models\GtagManager;
use App\Models\Analytics;
use App\Models\TagManager;
use App\Models\SearchConsole;
use App\Models\Page;
use App\Models\SocialMedia;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $category = KategoriProduk::latest()->get();
        $selectedCategories = $request->input('category');
        $selectedBrand = $request->input('brand');
        $produk = Produk::with('kategori_produk', 'brand_produk','sales_produk');
        if ($selectedCategories) {
            $produk->where('kategori_id', $selectedCategories);
        }
        if ($selectedBrand) {
            $produk->where('brand_id', $selectedBrand);
        }
        $produk = $produk->latest('created_at')->paginate(18);
        // return $produk;
        $latestProduct = Produk::latest()->take(3)->get();
        $top = TopProduk::take(5)->get();
        $popularBrands = Brand::get();
        $footer= Kontak::first();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $icon= Logo::get();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();
        $pages = Page::find(2);


        return view('sanitary.product.product-list', compact('produk', 'selectedCategories', 'category', 'latestProduct', 'top', 'popularBrands','footer', 'icon',  'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'pages', 'shopee', 'tokopedia'));
    }

    public function detail()
    {
        return view('sanitary.product.detail.index');
    }

    public function show($slug)
    {
        $product = Produk::with('kategori_produk')->with('sales_produk')->where('slug', $slug)->firstOrFail();
        $footer= Kontak::first();
        $url = url()->current();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $product_info = [];
        if ($product->informasi) {
            $product_info = json_decode($product->informasi, true);
        }
        $icon= Logo::get();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();
        $pages = Produk::where('slug', $slug)->firstOrFail();
        $kategoriTags = Produk::with('fasilitas')->where('slug', $slug)->firstOrFail();

        $relatedProducts = Produk::where('kategori_id', $product->kategori_id)
        ->where('id', '!=', $product->id)
        ->take(6)
        ->get();

        return view('sanitary.product.detail.index', [
            'product' => $product,
            'footer' => $footer,
            'nohp' => optional($product->sales_produk)->telp,
            'product_info' => $product_info,
            'relatedProducts' => $relatedProducts,
            'icon' => $icon,
            'tagManager' => $tagManager,
            'gtagManager' => $gtagManager,
            'analytics' => $analytics,
            'searchConsole' => $searchConsole,
            'pages' => $pages,
            'shopee' => $shopee,
            'tokopedia' => $tokopedia,
            'url' => $url,
            'kategoriTags' => $kategoriTags,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $produk = Produk::leftJoin('kategori_produk', 'produk.kategori_id', '=', 'kategori_produk.id')
        ->leftJoin('users', 'produk.users_id', '=', 'users.id')
        ->select('produk.id', 'produk.title', 'produk.slug', 'produk.excerpt', 'produk.image', 'produk.kategori_id', 'produk.brand_id', 'produk.users_id', 'produk.deskripsi', 'produk.informasi', 'produk.price', 'produk.price_disc', 'produk.created_at', 'produk.updated_at', 'produk.label_id',
                'kategori_produk.id as kategori_produk_id', 'kategori_produk.title as kategori_produk_title', 'kategori_produk.slug as kategori_produk_slug', 'kategori_produk.excerpt as kategori_produk_excerpt', 'kategori_produk.image as kategori_produk_image', 'kategori_produk.deskripsi as kategori_produk_deskripsi',
                'users.id as sales_id', 'users.name as sales_name', 'users.email as sales_email', 'users.telp as sales_telp', 'users.email_verified_at as sales_email_verified_at', 'users.current_team_id as sales_current_team_id', 'users.profile_photo_path as sales_profile_photo_path', 'users.deleted_at as sales_deleted_at', 'users.created_at as sales_created_at', 'users.updated_at as sales_updated_at')
        ->where('produk.title', 'like', '%' . $query . '%')
        ->orWhere('kategori_produk.title', 'like', '%' . $query . '%')
        ->paginate(18);


        $icon= Logo::get();
        $category = KategoriProduk::get();
        $top = TopProduk::get();
        $popularBrands = Brand::get();
        $footer= Kontak::first();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();
        $pages = Page::find(2);
        // $kategoriTags = Produk::with('fasilitas')->where('slug', $slug)->firstOrFail();

        return view('sanitary.product.product-list', [
            'produk' => $produk,
            'category' => $category,
            'top' => $top,
            'popularBrands' => $popularBrands,
            'footer' => $footer,
            'icon' => $icon,
            'tagManager' => $tagManager,
            'gtagManager' => $gtagManager,
            'analytics' => $analytics,
            'searchConsole' => $searchConsole,
            'pages' => $pages,
            'shopee' => $shopee,
            'tokopedia' => $tokopedia,
            // 'kategoriTags' => $kategoriTags,
        ]);
    }
}
