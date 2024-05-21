<?php

namespace Database\Seeders;

use App\Http\Livewire\Backend\KategoriProduk\KategoriProduk;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();
        $this->call(ConfigSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(SmtpSeeder::class);
        $this->call(FaqsSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(YoutubeSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(KategoriProdukSeeder::class);
        $this->call(ProdukSeeder::class);
    }
}
