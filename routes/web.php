<?php

use App\Http\Controllers\Backend\Area;
use App\Http\Controllers\Sanitary\AboutController;
use App\Http\Controllers\Sanitary\BlogController;
use App\Http\Controllers\Sanitary\DownloadController;
use App\Http\Controllers\Sanitary\FeedbackController;
use App\Http\Controllers\Sanitary\ForgotController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Sanitary\HomeController;
use App\Http\Controllers\Sanitary\LoginController;
use App\Http\Controllers\Sanitary\ProductController;
use App\Http\Controllers\Sanitary\ProfileController;
use App\Http\Controllers\Sanitary\RegisterController;
use App\Http\Controllers\Sanitary\UserController;
use App\Models\Feedback;
use App\Models\KategoriLabel;
use App\Models\Produk;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/link', function () {
    Artisan::call('cache:clear');
    Artisan::call('storage:link');
});

/* users route start*/
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

/* home route start*/
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

/* about route start */
Route::get('/about-us', [AboutController::class, 'index'])->name('about');

/* auth route start*/
Route::get('/sign-in', [LoginController::class, 'index'])->name('login.user');
Route::post('/sign-in', [LoginController::class, 'loginUser'])->name('login.form');
Route::post('/sign-out', [LoginController::class, 'logoutUser'])->name('logout.user');
Route::get('/register', [RegisterController::class, 'index'])->name('registrasi');
Route::post('/register', [RegisterController::class, 'store'])->name('registrasi.form');
Route::get('/forgot-password', [ForgotController::class, 'index'])->name('forgot.password');
Route::post('/forgot-password', [ForgotController::class, 'postForgotPassword'])->name('password.email');
Route::get('/reset-password/{token}', [ForgotController::class, 'getResetPasswordToken'])->name('password.reset');
Route::post('/reset-password', [ForgotController::class, 'postResetPasswordToken'])->name('password.update');

/* blog route start */
Route::get('/blog-list', [BlogController::class, 'index'])->name('blog');
// Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.detail');

/* contact route start*/
Route::get('/contact', [FeedbackController::class, 'index'])->name('contact');
Route::post('/contact', [FeedbackController::class, 'store'])->name('contact.store');

/* download route start*/
Route::get('brosur', [DownloadController::class, 'indexBrosur'])->name('brosur');
Route::get('/price-list', [DownloadController::class, 'indexPricelist'])->name('pricelist');
Route::get('/company-profile', [DownloadController::class, 'indexCompanyprofile'])->name('companyprofile');


/* product route start*/
Route::prefix('')->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product-detail', [ProductController::class, 'detail']);
    // Route::get('/{slug}', [ProductController::class, 'show'])->name('product.detail');
    Route::post('/product-detail', [ProductController::class, 'create']);
    Route::get('/search', [ProductController::class, 'search'])->name('search');
});


//backend routes
Route::middleware(['auth:web', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', \App\Http\Livewire\Dashboard::class)->name('dashboard');



    Route::prefix('user')->group(function () {
        Route::get('/', \App\Http\Livewire\User\User::class)->middleware(['can:users'])->name('user');
        Route::get('create', \App\Http\Livewire\User\Form\FormUser::class)->middleware(['can:users.create'])->name('createuser');
        Route::get('edit/{id}', \App\Http\Livewire\User\Form\FormUser::class)->middleware(['can:users.edit'])->name('edituser');


        Route::get('roles', \App\Http\Livewire\User\Roles::class)->middleware(['can:roles'])->name('roles');
        Route::get('permissions', \App\Http\Livewire\Permissions::class)->middleware(['can:permissions'])->name('permissions');
        Route::get('info/{id?}', \App\Http\Livewire\User\UserProfile::class)->name('user-profile');
    });



    Route::prefix('blog')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Blog\Blogs::class)->name('data-blog');
        Route::get('/create', App\Http\Livewire\Backend\Blog\FormBlog::class)->name('create-blog');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Blog\FormBlog::class)->name('edit-blog');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\Blog\DetailBlog::class)->name('detail-blog');

        // Route::get('/{slug}.html', App\Http\Livewire\Frontend\Blog\DetailBlog::class)->name('detail-blog');
    });

    Route::prefix('kategori-blog')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\KategoriBlog\KategoriBlog::class)->name('data-kategori-blog');
        Route::get('/create', App\Http\Livewire\Backend\KategoriBlog\FormKategoriBlog::class)->name('create-kategori-blog');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\KategoriBlog\FormKategoriBlog::class)->name('edit-kategori-blog');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\KategoriBlog\DetailKategoriBlog::class)->name('detail-kategori-blog');
    });

    Route::prefix('kategori-tags')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\KategoriTags\KategoriTags::class)->name('data-kategori-tags');
        Route::get('/create', App\Http\Livewire\Backend\KategoriTags\FormKategoriTags::class)->name('create-kategori-tags');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\KategoriTags\FormKategoriTags::class)->name('edit-kategori-tags');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\KategoriTags\DetailKategoriTags::class)->name('detail-kategori-tags');
    });

    Route::prefix('kategori-tags-produk')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\KategoriTagsProduk\KategoriTagsProduk::class)->name('data-kategori-tags-produk');
        Route::get('/create', App\Http\Livewire\Backend\KategoriTagsProduk\FormKategoriTagsProduk::class)->name('create-kategori-tags-produk');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\KategoriTagsProduk\FormKategoriTagsProduk::class)->name('edit-kategori-tags-produk');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\KategoriTagsProduk\DetailKategoriTagsProduk::class)->name('detail-kategori-tags-produk');
    });


    //start - syukron488@gmail.com
    Route::prefix('tag')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Tag\Tags::class)->name('data-tag');
        Route::get('/create', App\Http\Livewire\Backend\Tag\FormTag::class)->name('create-tag');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Tag\FormTag::class)->name('edit-tag');
        Route::get('/{id}.html', App\Http\Livewire\Backend\Tag\DetailTag::class)->name('detail-tag');
    });

    Route::prefix('gtagmanager')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\GtagManager\GtagManager::class)->name('data-gtagmanager');
        Route::get('/create', App\Http\Livewire\Backend\GtagManager\FormGtagManager::class)->name('create-gtagmanager');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\GtagManager\FormGtagManager::class)->name('edit-gtagmanager');
        Route::get('/{id}.html', App\Http\Livewire\Backend\GtagManager\DetailGtagManager::class)->name('detail-gtagmanager');
    });

    Route::prefix('analytics')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Analytics\Analytics::class)->name('data-analytics');
        Route::get('/create', App\Http\Livewire\Backend\Analytics\FormAnalytics::class)->name('create-analytics');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Analytics\FormAnalytics::class)->name('edit-analytics');
        Route::get('/{id}.html', App\Http\Livewire\Backend\Analytics\DetailAnalytics::class)->name('detail-analytics');
    });
    //end - syukron488@gmail.com

    Route::prefix('brand')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Brand\Brand::class)->name('data-brand');
        Route::get('/create', App\Http\Livewire\Backend\Brand\FormBrand::class)->name('create-brand');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Brand\FormBrand::class)->name('edit-brand');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\Brand\DetailBrand::class)->name('detail-brand');
    });

    Route::prefix('produk')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Produk\Produk::class)->name('data-produk');
        Route::get('/create', App\Http\Livewire\Backend\Produk\FormProduk::class)->name('create-produk');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Produk\FormProduk::class)->name('edit-produk');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\Produk\DetailProduk::class)->name('detail-produk');
    });

    Route::prefix('top-produk')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\TopProduk\TopProduk::class)->name('data-top-produk');
        Route::get('/create', App\Http\Livewire\Backend\TopProduk\FormTopProduk::class)->name('create-top-produk');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\TopProduk\FormTopProduk::class)->name('edit-top-produk');
        Route::get('/{id}.html', App\Http\Livewire\Backend\TopProduk\DetailTopProduk::class)->name('detail-top-produk');
    });

    Route::prefix('selling-produk')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\SellingProduk\SellingProduk::class)->name('data-selling-produk');
        Route::get('/create', App\Http\Livewire\Backend\SellingProduk\FormSellingProduk::class)->name('create-selling-produk');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\SellingProduk\FormSellingProduk::class)->name('edit-selling-produk');
        Route::get('/{id}.html', App\Http\Livewire\Backend\SellingProduk\DetailSellingProduk::class)->name('detail-selling-produk');
    });

    Route::prefix('diskon-produk')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\DiskonProduk\DiskonProduk::class)->name('data-diskon-produk');
        Route::get('/create', App\Http\Livewire\Backend\DiskonProduk\FormDiskonProduk::class)->name('create-diskon-produk');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\DiskonProduk\FormDiskonProduk::class)->name('edit-diskon-produk');
        Route::get('/{id}.html', App\Http\Livewire\Backend\DiskonProduk\DetailDiskonProduk::class)->name('detail-diskon-produk');
    });

    Route::prefix('featured-produk')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\FeaturedProduk\FeaturedProduk::class)->name('data-featured-produk');
        Route::get('/create', App\Http\Livewire\Backend\FeaturedProduk\FormFeaturedProduk::class)->name('create-featured-produk');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\FeaturedProduk\FormFeaturedProduk::class)->name('edit-featured-produk');
        Route::get('/{id}.html', App\Http\Livewire\Backend\FeaturedProduk\DetailFeaturedProduk::class)->name('detail-featured-produk');
    });

    Route::prefix('kategori-label')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\KategoriLabel\KategoriLabel::class)->name('data-kategori-label');
        Route::get('/create', App\Http\Livewire\Backend\KategoriLabel\FormKategoriLabel::class)->name('create-kategori-label');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\KategoriLabel\FormKategoriLabel::class)->name('edit-kategori-label');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\KategoriLabel\DetailKategoriLabel::class)->name('detail-kategori-label');
    });

    Route::prefix('kategori-produk')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\KategoriProduk\KategoriProduk::class)->name('data-kategori-produk');
        Route::get('/create', App\Http\Livewire\Backend\KategoriProduk\FormKategoriProduk::class)->name('create-kategori-produk');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\KategoriProduk\FormKategoriProduk::class)->name('edit-kategori-produk');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\KategoriProduk\DetailKategoriProduk::class)->name('detail-kategori-produk');
    });

    Route::prefix('history-pesanan')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\HistoryPesanan\HistoryPesanan::class)->name('history-pesanan');
        Route::get('/{id}', App\Http\Livewire\Backend\HistoryPesanan\DetailHistoryPesanan::class)->name('detail-history-pesanan');
    });

    Route::prefix('faq')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Faq\Faqs::class)->name('data-faq');
        Route::get('/create', App\Http\Livewire\Backend\Faq\FormFaq::class)->name('create-faq');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Faq\FormFaq::class)->name('edit-faq');
        Route::get('/{id}', App\Http\Livewire\Backend\Faq\DetailFaq::class)->name('detail-faq');
    });

    Route::prefix('feedback')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Feedback\Feedback::class)->name('data-feedback');
        Route::get('/create', App\Http\Livewire\Backend\Feedback\FormFeedback::class)->name('create-feedback');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Feedback\FormFeedback::class)->name('edit-feedback');
        Route::get('/{id}', App\Http\Livewire\Backend\Feedback\DetailFeedback::class)->name('detail-feedback');
    });

    Route::prefix('page')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Page\Pages::class)->name('data-page');
        Route::get('/create', App\Http\Livewire\Backend\Page\FormPage::class)->name('create-page');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Page\FormPage::class)->name('edit-page');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\Page\DetailPage::class)->name('detail-page');
    });

    Route::prefix('parent-area')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\ParentArea\ParentArea::class)->name('data-parent-area');
        Route::get('/create', App\Http\Livewire\Backend\ParentArea\FormParentArea::class)->name('create-parent-area');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\ParentArea\FormParentArea::class)->name('edit-parent-area');
        Route::get('/{slug}.html', App\Http\Livewire\Backend\ParentArea\DetailParentArea::class)->name('detail-parent-area');
    });

    Route::prefix('area')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Area\Area::class)->name('data-area');
        Route::get('/create', App\Http\Livewire\Backend\Area\FormArea::class)->name('create-area');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Area\FormArea::class)->name('edit-area');
        Route::get('/{id}', App\Http\Livewire\Backend\Area\DetailArea::class)->name('detail-area');
    });

    Route::prefix('kontak')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Kontak\Kontak::class)->name('data-kontak');
        Route::get('/create', App\Http\Livewire\Backend\Kontak\FormKontak::class)->name('create-kontak');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Kontak\FormKontak::class)->name('edit-kontak');
        Route::get('/{id}', App\Http\Livewire\Backend\Kontak\DetailKontak::class)->name('detail-kontak');
    });
    Route::prefix('about')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\About\About::class)->name('data-about');
        Route::get('/create', App\Http\Livewire\Backend\About\FormAbout::class)->name('create-about');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\About\FormAbout::class)->name('edit-about');
        Route::get('/{id}', App\Http\Livewire\Backend\About\DetailAbout::class)->name('detail-about');
    });
    Route::prefix('history')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\History\History::class)->name('data-history');
        Route::get('/create', App\Http\Livewire\Backend\History\FormHistory::class)->name('create-history');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\History\FormHistory::class)->name('edit-history');
        Route::get('/{id}', App\Http\Livewire\Backend\History\DetailHistory::class)->name('detail-history');
    });
    Route::prefix('statement')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Statement\Statement::class)->name('data-statement');
        Route::get('/create', App\Http\Livewire\Backend\Statement\FormStatement::class)->name('create-statement');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Statement\FormStatement::class)->name('edit-statement');
        Route::get('/{id}', App\Http\Livewire\Backend\Statement\DetailStatement::class)->name('detail-statement');
    });

    Route::prefix('socialmedia')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\SocialMedia\SocialMedia::class)->name('data-socialmedia');
        Route::get('/create', App\Http\Livewire\Backend\SocialMedia\FormSocialMedia::class)->name('create-socialmedia');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\SocialMedia\FormSocialMedia::class)->name('edit-socialmedia');
        Route::get('/{id}', App\Http\Livewire\Backend\SocialMedia\DetailSocialMedia::class)->name('detail-socialmedia');
    });

    Route::prefix('link-youtube')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Youtube\Youtube::class)->name('data-youtube');
        Route::get('/create', App\Http\Livewire\Backend\Youtube\FormYoutube::class)->name('create-youtube');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Youtube\FormYoutube::class)->name('edit-youtube');
        Route::get('/{id}', App\Http\Livewire\Backend\Youtube\DetailYoutube::class)->name('detail-youtube');
    });

    Route::prefix('carousel')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Carousel\Carousel::class)->name('data-carousel');
        Route::get('/create', App\Http\Livewire\Backend\Carousel\FormCarousel::class)->name('create-carousel');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Carousel\FormCarousel::class)->name('edit-carousel');
        Route::get('/{id}', App\Http\Livewire\Backend\Carousel\DetailCarousel::class)->name('detail-carousel');
    });

    Route::prefix('gallery')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Gallery\Gallery::class)->name('data-gallery');
        Route::get('/create', App\Http\Livewire\Backend\Gallery\FormGallery::class)->name('create-gallery');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Gallery\FormGallery::class)->name('edit-gallery');
        Route::get('/{id}', App\Http\Livewire\Backend\Gallery\DetailGallery::class)->name('detail-gallery');
    });

    Route::prefix('brosur')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Brosur\Brosur::class)->name('data-brosur');
        Route::get('/create', App\Http\Livewire\Backend\Brosur\FormBrosur::class)->name('create-brosur');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Brosur\FormBrosur::class)->name('edit-brosur');
        Route::get('/{id}', App\Http\Livewire\Backend\Brosur\DetailBrosur::class)->name('detail-brosur');
    });

    Route::prefix('companyprofile')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\CompanyProfile\CompanyProfile::class)->name('data-companyprofile');
        Route::get('/create', App\Http\Livewire\Backend\CompanyProfile\FormCompanyProfile::class)->name('create-companyprofile');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\CompanyProfile\FormCompanyProfile::class)->name('edit-companyprofile');
        Route::get('/{id}', App\Http\Livewire\Backend\CompanyProfile\DetailCompanyProfile::class)->name('detail-companyprofile');
    });

    Route::prefix('pricelist')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\PriceList\PriceList::class)->name('data-pricelist');
        Route::get('/create', App\Http\Livewire\Backend\PriceList\FormPriceList::class)->name('create-pricelist');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\PriceList\FormPriceList::class)->name('edit-pricelist');
        Route::get('/{id}', App\Http\Livewire\Backend\PriceList\DetailPriceList::class)->name('detail-pricelist');
    });

    Route::prefix('logo')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Logo\Logo::class)->name('data-logo');
        Route::get('/create', App\Http\Livewire\Backend\Logo\FormLogo::class)->name('create-logo');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Logo\FormLogo::class)->name('edit-logo');
        Route::get('/{id}', App\Http\Livewire\Backend\Logo\DetailLogo::class)->name('detail-logo');
    });


    Route::prefix('banner')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\Banner\Banner::class)->name('data-banner');
        Route::get('/create', App\Http\Livewire\Backend\Banner\FormBanner::class)->name('create-banner');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\Banner\FormBanner::class)->name('edit-banner');
        Route::get('/{id}', App\Http\Livewire\Backend\Banner\DetailBanner::class)->name('detail-banner');
    });

    Route::prefix('search-console')->group(function () {
        Route::get('/', App\Http\Livewire\Backend\SearchConsole\SearchConsole::class)->name('data-search-console');
        // Route::get('/create', App\Http\Livewire\Backend\Tag\FormTag::class)->name('create-tag');
        Route::get('/edit/{id}', App\Http\Livewire\Backend\SearchConsole\FormSearchConsole::class)->name('edit-search-console');
        Route::get('/{id}.html', App\Http\Livewire\Backend\SearchConsole\DetailSearchConsole::class)->name('detail-search-console');
    });
    // syukron488@gmail.com

    Route::get('config', \App\Http\Livewire\Config::class)->name('config');

    Route::get('clearnotif', function () {
        return markNotificationAsRead();
    })->name('clearnotif');

    Route::get('clear', function () {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('optimize');
        return "all clear";
    })->role('Superadmin');
});

Route::get('/{slug}', function ($slug) {
    if (Produk::where('slug', $slug)->exists()) {
        return app(ProductController::class)->show($slug);
    } else {
        return app(BlogController::class)->show($slug);
    }
})->name('product.detail');

