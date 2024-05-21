<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($data as $item)
        <url>
            <loc>{{ $item['loc'] }}</loc>
            <lastmod>{{ $item['lastmod'] }}</lastmod>
        </url>
    @endforeach
    @foreach ($blog as $blog)
        <url>
            <loc>{{ url('/' . $blog->slug) }}</loc>
            <lastmod>{{ $blog->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach
    @foreach ($produk as $produk)
        <url>
            <loc>{{ url('/' . $produk->slug) }}</loc>
            <lastmod>{{ $produk->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        </url>
    @endforeach
</urlset>
