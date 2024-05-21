<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'title'    => "Bintang",
            'slug'       => "bintang",
            'deskripsi'       => "Bintang minuman menyehatkan",
            'excerpt'     => "Bintang adalah minuman khas yang menyehatkan",
            'image'   => "sanitary/kategoriproduk/SfAeHzFWwVvblnqy2LK3xECWrnYVw2rqOLJBUN21.png",
            'price'     => 50000,
            'price_disc'     => 40000,
            'kategori_id' => 1,
            'brand_id' => 1,
            'users_id' => 2
        ]);

        Produk::create([
            'title'    => "Vodka",
            'slug'       => "vodka",
            'deskripsi'       => "Vodka minuman menyehatkan",
            'excerpt'     => "Vodka adalah minuman khas yang menyehatkan",
            'image'   => "sanitary/produk/aqYTvDz9NQ2vs5wDRFSDuTFJ6wk2TtAXUkt1kc5d.png",
            'price'     => 100000,
            'price_disc'     => 80000,
            'kategori_id' => 1
        ]);

        Produk::create([
            'title'    => "Whisky",
            'slug'       => "whisky",
            'deskripsi'       => "Whisky minuman menyehatkan",
            'excerpt'     => "Whisky adalah minuman khas yang menyehatkan",
            'image'   => "sanitary/produk/DmCI7oX7AJIPeGR6lxocHsTA9kt4A8LXhaGkTHDX.jpg",
            'price'     => 90000,
            'price_disc'     => 75000,
            'kategori_id' => 1,
            'brand_id' => 2
        ]);
    }
}
