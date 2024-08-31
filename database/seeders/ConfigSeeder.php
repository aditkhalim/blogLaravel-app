<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Config::insert([
            [
                'name' => 'logo',
                'value' => 'logo.png'
            ],
            [
                'name' => 'blogname',
                'value' => 'ditnur'
            ],
            [
                'name' => 'title',
                'value' => 'Welcome to Blog Home!'
            ],
            [
                'name' => 'caption',
                'value' => 'A Bootstrap 5 starter layout for your next blog homepage'
            ],
            [
                'name' => 'ads_widget',
                'value' => 'adsense 1'
            ],
            [
                'name' => 'ads_header',
                'value' => 'adsense 1'
            ],
            [
                'name' => 'ads_header',
                'value' => 'adsense 2'
            ],
            [
                'name' => 'ads_footer',
                'value' => 'adsense 3'
            ],
            [
                'name' => 'phone',
                'value' => '+628 123456789'
            ],
            [
                'name' => 'email',
                'value' => 'adit.nur97@gmail.com'
            ],
            [
                'name' => 'facebook',
                'value' => 'facebook.com'
            ],
            [
                'name' => 'youtube',
                'value' => 'youtube.com'
            ],
            [
                'name' => 'instagram',
                'value' => 'instagram.com'
            ],
            [
                'name' => 'footer',
                'value' => 'Adit Nur'
            ]
            ]);
    }
}
