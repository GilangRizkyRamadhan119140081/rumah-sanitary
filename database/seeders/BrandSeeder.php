<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'title'    => "Solahart",
            'slug'       => "solahart",
            'deskripsi'       => "Deskripsi Solahart",
            'excerpt'     => "Excerpt Solahart",
            'image'   => "",
        ]);

        Brand::create([
            'title'    => "Handal",
            'slug'       => "handal",
            'deskripsi'       => "Deskripsi Handal",
            'excerpt'     => "Excerpt Handal",
            'image'   => "",
        ]);

        Brand::create([
            'title'    => "Atlantik",
            'slug'       => "atlantik",
            'deskripsi'       => "Deskripsi Atlantik",
            'excerpt'     => "Excerpt Atlantik",
            'image'   => "",
        ]);

        Brand::create([
            'title'    => "Atmos",
            'slug'       => "atmos",
            'deskripsi'       => "Deskripsi Atmos",
            'excerpt'     => "Excerpt Atmos",
            'image'   => "",
        ]);

        Brand::create([
            'title'    => "Riifo",
            'slug'       => "riifo",
            'deskripsi'       => "Deskripsi Riifo",
            'excerpt'     => "Excerpt Riifo",
            'image'   => "",
        ]);

        Brand::create([
            'title'    => "Frap",
            'slug'       => "frap",
            'deskripsi'       => "Deskripsi Frap",
            'excerpt'     => "Excerpt Frap",
            'image'   => "",
        ]);
    }
}
