<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name' => 'Comedia',
            'image' => 'https://png.pngtree.com/png-vector/20230407/ourmid/pngtree-comedy-line-icon-vector-png-image_6680943.png'
        ]);

        Category::create([
            'category_name' => 'Acción',
            'image' => 'https://cdn.icon-icons.com/icons2/390/PNG/512/pistol-gun_39414.png'
        ]);

        Category::create([
            'category_name' => 'Ciencia Ficción',
            'image' => 'https://cdn-icons-png.flaticon.com/512/5381/5381349.png'
        ]);

        Category::create([
            'category_name' => 'Terror',
            'image' => 'https://cdn-icons-png.flaticon.com/512/2589/2589308.png'
        ]);

        Category::create([
            'category_name' => 'Drama',
            'image' => 'https://cdn.icon-icons.com/icons2/390/PNG/512/drama-masks_38355.png'
        ]);

        Category::create([
            'category_name' => 'Documental',
            'image' => 'https://cdn-icons-png.flaticon.com/512/7074/7074017.png'
        ]);

        Category::create([
            'category_name' => 'Infantil',
            'image' => 'https://cdn.icon-icons.com/icons2/2387/PNG/512/child_boy_icon_144644.png'
        ]);
    }
}