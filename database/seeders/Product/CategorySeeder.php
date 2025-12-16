<?php

namespace Database\Seeders\Product;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        $categories = [
            ['id' => Str::uuid(), 'name' => 'Men', 'parent_id' => null],
            ['id' => Str::uuid(), 'name' => 'Women', 'parent_id' => null],
            ['id' => Str::uuid(), 'name' => 'Kids', 'parent_id' => null],
            ['id' => Str::uuid(), 'name' => 'Baby', 'parent_id' => null],
            ['id' => Str::uuid(), 'name' => 'Unisex', 'parent_id' => null],
            ['id' => Str::uuid(), 'name' => 'Accessories', 'parent_id' => null],
            ['id' => Str::uuid(), 'name' => 'Shoes', 'parent_id' => null],
        ];

        DB::table('categories')->insert($categories);

        // Get IDs for main categories
        $menId         = DB::table('categories')->where('name', 'Men')->value('id');
        $womenId       = DB::table('categories')->where('name', 'Women')->value('id');
        $kidsId        = DB::table('categories')->where('name', 'Kids')->value('id');
        $babyId        = DB::table('categories')->where('name', 'Baby')->value('id');
        $accessoriesId = DB::table('categories')->where('name', 'Accessories')->value('id');
        $shoesId       = DB::table('categories')->where('name', 'Shoes')->value('id');

        // Subcategories
        $subcategories = [
            // Men
            ['id' => Str::uuid(), 'name' => 'T-Shirts & Polos', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Shirts', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Hoodies & Sweatshirts', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Pants & Trousers', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Jeans', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Shorts', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Suits & Blazers', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Jackets & Coats', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Activewear / Sportswear', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Underwear', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Sleepwear', 'parent_id' => $menId],
            ['id' => Str::uuid(), 'name' => 'Swimwear', 'parent_id' => $menId],

            // Women
            ['id' => Str::uuid(), 'name' => 'T-Shirts & Tops', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Blouses & Shirts', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Hoodies & Sweatshirts', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Sweaters & Cardigans', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Dresses', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Skirts', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Pants & Trousers', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Jeans', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Shorts', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Jumpsuits & Playsuits', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Jackets & Coats', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Activewear / Sportswear', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Lingerie & Underwear', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Sleepwear', 'parent_id' => $womenId],
            ['id' => Str::uuid(), 'name' => 'Swimwear', 'parent_id' => $womenId],


            // Kids
            ['id' => Str::uuid(), 'name' => 'Tops & T-Shirts', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Shirts & Blouses', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Hoodies & Sweatshirts', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Sweaters & Cardigans', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Pants & Trousers', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Jeans', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Shorts', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Dresses & Skirts (girls)', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Jackets & Coats', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Schoolwear / Uniforms', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Activewear', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Sleepwear', 'parent_id' => $kidsId],
            ['id' => Str::uuid(), 'name' => 'Swimwear', 'parent_id' => $kidsId],

            // Baby
            ['id' => Str::uuid(), 'name' => 'Bodysuits', 'parent_id' => $babyId],
            ['id' => Str::uuid(), 'name' => 'Rompers', 'parent_id' => $babyId],
            ['id' => Str::uuid(), 'name' => 'Tops & T‑Shirts', 'parent_id' => $babyId],
            ['id' => Str::uuid(), 'name' => 'Pants & Leggings', 'parent_id' => $babyId],
            ['id' => Str::uuid(), 'name' => 'Sets & Outfits', 'parent_id' => $babyId],
            ['id' => Str::uuid(), 'name' => 'Sleepwear', 'parent_id' => $babyId],
            ['id' => Str::uuid(), 'name' => 'Outerwear', 'parent_id' => $babyId],

            // Accessories
            ['id' => Str::uuid(), 'name' => 'Bags & Backpacks', 'parent_id' => $accessoriesId],
            ['id' => Str::uuid(), 'name' => 'Belts', 'parent_id' => $accessoriesId],
            ['id' => Str::uuid(), 'name' => 'Hats & Caps', 'parent_id' => $accessoriesId],
            ['id' => Str::uuid(), 'name' => 'Scarves & Shawls', 'parent_id' => $accessoriesId],
            ['id' => Str::uuid(), 'name' => 'Gloves', 'parent_id' => $accessoriesId],
            ['id' => Str::uuid(), 'name' => 'Socks & Tights', 'parent_id' => $accessoriesId],
            ['id' => Str::uuid(), 'name' => 'Wallets', 'parent_id' => $accessoriesId],

            // Shoes
            ['id' => Str::uuid(), 'name' => 'Sneakers', 'parent_id' => $shoesId],
            ['id' => Str::uuid(), 'name' => 'Casual Shoes', 'parent_id' => $shoesId],
            ['id' => Str::uuid(), 'name' => 'Formal Shoes', 'parent_id' => $shoesId],
            ['id' => Str::uuid(), 'name' => 'Boots', 'parent_id' => $shoesId],
            ['id' => Str::uuid(), 'name' => 'Sandals & Slippers', 'parent_id' => $shoesId],
            ['id' => Str::uuid(), 'name' => 'Sports Shoes', 'parent_id' => $shoesId],
        ];

        DB::table('categories')->insert($subcategories);
    }
}
