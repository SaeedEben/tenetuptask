<?php

namespace Database\Seeders\Boutique;

use App\Models\Boutique\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        $brands = [
            'Gucci', 'Louis Vuitton', 'Prada', 'Chanel', 'Dior', 'Balenciaga', 'Versace',
            'Burberry', 'Ralph Lauren', 'Tommy Hilfiger', 'Hugo Boss',

            'Nike', 'Adidas', 'Puma', 'Reebok', 'Under Armour', 'Lululemon', 'New Balance',
            'Skechers', 'Champion',

            'Zara', 'H&M', 'Uniqlo', 'Gap', 'Old Navy', 'Forever 21', 'Mango', 'Levi\'s',
            'American Eagle', 'Urban Outfitters',

            'Supreme', 'Off-White', 'Stüssy', 'The North Face', 'Patagonia', 'Vans', 'Converse',
            'Dr. Martens', 'Carhartt WIP',

            'Reformation', 'Everlane', 'Pact',
        ];

        foreach ($brands as $brand) {
            Brand::firstOrCreate([
                'id' => Str::uuid(),
                'name' => $brand
            ]);
        }
    }
}
