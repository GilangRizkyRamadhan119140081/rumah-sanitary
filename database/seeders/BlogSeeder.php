<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title'    => "Sanitary adalah web terbaik untuk mencari keperluan rumah",
            'slug'       => "sanitary-adalah-web-terbaik-untuk-mencari-keperluan-rumah",
            'content'       => "Mau cari keperluan rumah, gas ke web sanitary",
            'excerpt'     => "Sanitary web terbaik dan tercepat",
            'image'   => "sanitary/post/IqIfy1QCCPdc0an5C1hlhcj7xEbPXAkkj2UQc7T8.jpg",
            'keyword' => "Bintang",
            'status'   => "Publish",
            'published_at'   => "2023-11-12 00:00:00",
            'created_by' => 'Icha',
            'user_id'   => 1
        ]);
    }
}
