<?php

namespace Database\Seeders;

use App\Models\KategoriProduk;
use Illuminate\Database\Seeder;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriProduk::create([
            'title'    => "Minuman Keras",
            'slug'       => "minuman-keras",
            'deskripsi'       => "Minuman keras itu menyehatkan",
            'excerpt'     => "Minuman keras yang menyehatkan",
            'image'   => "sanitary/kategoriproduk/SfAeHzFWwVvblnqy2LK3xECWrnYVw2rqOLJBUN21.png",
        ]);

        KategoriProduk::create([
            'title'    => "Rokok",
            'slug'       => "rokok",
            'deskripsi'       => "Rokok itu adalah sebuah kertas yang dibakar",
            'excerpt'     => "Rokok itu adalah bagian dari hidup",
            'image'   => "sanitary/kategoriproduk/UYSxbGxshBO0pnfHDEF61tUVE5Gft1S6vqYnoVq8.png",
        ]);

        KategoriProduk::create([
            'title'    => "Jajanan SD",
            'slug'       => "jajanan-sd",
            'deskripsi'       => "Jajajan SD itu adalah makanan atau cemilan terenak dibumi",
            'excerpt'     => "Jajajan SD itu cemilan terenak in the world",
            'image'   => "sanitary/kategoriproduk/DGUXX3WSjeU74cflN4xbOdPPFJolVctas8GT99r3.jpg",
        ]);
    }
}
