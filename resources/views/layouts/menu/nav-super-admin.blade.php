<ul class="sidebar-menu mt-4">
    <li class="nav-item @if (request()->routeIs('dashboard')) active @endif">
        <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['history-pesanan'])) active @endif">
        <a href="{{ route('history-pesanan') }}" class="nav-link"><i class="fas fa-users" aria-hidden="true"></i>
            <span>{{ __('Riwayat Pesanan') }}</span></a>

    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-feedback'])) active @endif">
        <a href="{{ route('data-feedback') }}" class="nav-link"><i class="fa fa-address-book" aria-hidden="true"></i>
            <span>{{ __('Feedback') }}</span></a>

    </li>

    <li class="menu-header">Kelola Blog</li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-blog'])) active @endif">
        <a href="{{ route('data-blog') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Blog') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-kategori-blog'])) active @endif">
        <a href="{{ route('data-kategori-blog') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Kategori Blog') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-kategori-tags'])) active @endif">
        <a href="{{ route('data-kategori-tags') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Kategori Tags') }}</span></a>

    </li>
    {{-- syukron488@gmail.com --}}
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-tag'])) active @endif">
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-tag'])) active @endif">
        <a href="{{ route('data-tag') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Tag Manager') }}</span></a>

    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-gtagmanager'])) active @endif">
        <a href="{{ route('data-gtagmanager') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Google Tag Manager') }}</span></a>

    </li>


    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-search-console'])) active @endif">
        <a href="{{ route('data-search-console') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Search Console') }}</span></a>
    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-analytics'])) active @endif">
        <a href="{{ route('data-analytics') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Google Analytics') }}</span></a>

    </li>

    <li class="menu-header">Kelola Produk</li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-produk'])) active @endif">
        <a href="{{ route('data-produk') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Produk') }}</span></a>
    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-kategori-produk'])) active @endif">
        <a href="{{ route('data-kategori-produk') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Kategori Produk') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-kategori-label'])) active @endif">
        <a href="{{ route('data-kategori-label') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Kategori Label') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-kategori-tags-produk'])) active @endif">
        <a href="{{ route('data-kategori-tags-produk') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Kategori Tags Produk') }}</span></a>
    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-brand'])) active @endif">
        <a href="{{ route('data-brand') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Brand') }}</span></a>

    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-top-produk'])) active @endif">
        <a href="{{ route('data-top-produk') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Top Produk') }}</span></a>

    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-featured-produk'])) active @endif">
        <a href="{{ route('data-featured-produk') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Featured Produk') }}</span></a>

    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-selling-produk'])) active @endif">
        <a href="{{ route('data-selling-produk') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Selling Produk') }}</span></a>

    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-diskon-produk'])) active @endif">
        <a href="{{ route('data-diskon-produk') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Diskon Produk') }}</span></a>

    </li>

    <li class="menu-header">Kelola Media</li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-carousel'])) active @endif">
        <a href="{{ route('data-carousel') }}" class="nav-link"><i class="fa fa-image" aria-hidden="true"></i>
            <span>{{ __('Gambar Slider') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-banner'])) active @endif">
        <a href="{{ route('data-banner') }}" class="nav-link"><i class="fa fa-images" aria-hidden="true"></i>
            <span>{{ __('Foto Banner') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-gallery'])) active @endif">
        <a href="{{ route('data-gallery') }}" class="nav-link"><i class="fa fa-images" aria-hidden="true"></i>
            <span>{{ __('Foto Galeri') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-youtube'])) active @endif">
        <a href="{{ route('data-youtube') }}" class="nav-link"><i class="fa fa-laptop" aria-hidden="true"></i>
            <span>{{ __('Link Youtube') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-logo'])) active @endif">
        <a href="{{ route('data-logo') }}" class="nav-link"><i class="fa fa-cog" aria-hidden="true"></i>
            <span>{{ __('Setting Logo') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-brosur'])) active @endif">
        <a href="{{ route('data-brosur') }}" class="nav-link"><i class="fa fa-upload" aria-hidden="true"></i>
            <span>{{ __('Upload Brosur') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-companyprofile'])) active @endif">
        <a href="{{ route('data-companyprofile') }}" class="nav-link"><i class="fa fa-upload" aria-hidden="true"></i>
            <span>{{ __('Upload Company Profile') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-pricelist'])) active @endif">
        <a href="{{ route('data-pricelist') }}" class="nav-link"><i class="fa fa-upload" aria-hidden="true"></i>
            <span>{{ __('Upload Price List') }}</span></a>

    </li>


    <li class="menu-header">Kelola Outlet</li>

    {{-- <li class="nav-item @if (in_array(request()->route()->getName(), ['data-parent-area'])) active @endif">
        <a href="{{ route('data-parent-area') }}" class="nav-link"><i class="fa fa-location-arrow"
                aria-hidden="true"></i>
            <span>{{ __('Area Provinsi') }}</span></a>

    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-area'])) active @endif">
        <a href="{{ route('data-area') }}" class="nav-link"><i class="fa fa-arrows-alt" aria-hidden="true"></i>
            <span>{{ __('Area Kota') }}</span></a>

    </li> --}}
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-about'])) active @endif">
        <a href="{{ route('data-about') }}" class="nav-link"><i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>{{ __('About Us') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-history'])) active @endif">
        <a href="{{ route('data-history') }}" class="nav-link"><i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>{{ __('History Our Store') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-kontak'])) active @endif">
        <a href="{{ route('data-kontak') }}" class="nav-link"><i class="fa fa-phone-alt" aria-hidden="true"></i>
            <span>{{ __('Kontak') }}</span></a>
    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-socialmedia'])) active @endif">
        <a href="{{ route('data-socialmedia') }}" class="nav-link"><i class="fa fa-link" aria-hidden="true"></i>
            <span>{{ __('Market Place') }}</span></a>

    </li>
    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-statement'])) active @endif">
        <a href="{{ route('data-statement') }}" class="nav-link"><i class="fa fa-quote-left" aria-hidden="true"></i>
            <span>{{ __('Our Statement') }}</span></a>

    </li>

    <li class="menu-header">Kelola Faqs</li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-faq'])) active @endif">
        <a href="{{ route('data-faq') }}" class="nav-link"><i class="fa fa-comment" aria-hidden="true"></i>
            <span>{{ __('Faqs') }}</span></a>

    </li>

    <li class="nav-item @if (in_array(request()->route()->getName(), ['data-page'])) active @endif">
        <a href="{{ route('data-page') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Halaman') }}</span></a>

    </li>

    @if (isAdmin())
        <li class="menu-header">Kelola Pengguna</li>
        <li class="nav-item dropdown @if (in_array(request()->route()->getName(), ['user', 'roles', 'jobs', 'sme'])) active @endif">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
                <span>{{ __('List Pengguna') }}</span></a>
            <ul class="dropdown-menu">
                <li class="@if (request()->routeIs('user')) active @endif"><a class="nav-link"
                        href="{{ route('user') }}">{{ __('Users') }}</a></li>
                <li class="@if (request()->routeIs('roles')) active @endif"><a class="nav-link"
                        href="{{ route('roles') }}">{{ __('Roles') }}</a></li>

            </ul>
        </li>
    @endif
</ul>

@if (isAdmin())
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{ route('config') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Config
        </a>
    </div>
@else
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{ route('tutorial') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-graduation-cap"></i> Tutorial
        </a>
    </div>
@endif
