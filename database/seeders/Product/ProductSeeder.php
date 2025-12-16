<?php

namespace Database\Seeders\Product;

use App\Enum\Language\LanguagesEnum;
use App\Models\Product\Category;
use App\Models\Product\Collection;
use App\Models\Product\Material;
use App\Models\Product\Note;
use App\Models\Product\Product;
use App\Models\Product\ProductFile;
use App\Models\Product\ProductTranslation;
use App\Models\Product\SeoElement;
use App\Models\Product\Shipping;
use App\Models\Shop\Brand;
use App\Models\Shop\Shop;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        $shops         = Shop::query()->pluck('id');
        $brands        = Brand::query()->pluck('id');
        $collections   = Collection::query()->pluck('id');
        $categories    = Category::query()->whereNull('parent_id')->pluck('id');
        $subCategories = Category::query()->whereNotNull('parent_id')->pluck('id');

        Product::factory()
            ->count(100)
            ->make()
            ->each(function (Product $product) use (
                $shops,
                $brands,
                $collections,
                $categories,
                $subCategories
            ) {
                $product->shop_id         = $shops->random();
                $product->brand_id        = $brands->random();
                $product->collection_id   = $collections->random();
                $product->category_id     = $categories->random();
                $product->sub_category_id = $subCategories->random();

                $product->save();

                foreach (LanguagesEnum::cases() as $lang) {
                    ProductTranslation::factory()
                        ->locale($lang)
                        ->create([
                            'product_id' => $product->id,
                        ]);

                    SeoElement::factory()
                        ->locale($lang)
                        ->create([
                            'product_id' => $product->id,
                        ]);

                    Note::factory()
                        ->locale($lang)
                        ->create([
                            'product_id' => $product->id,
                        ]);
                }

                Material::factory()
                    ->create([
                        'product_id' => $product->id,
                    ]);

                Shipping::factory()
                    ->create([
                        'product_id' => $product->id,
                    ]);

                ProductFile::factory(10)
                    ->create([
                        'product_id' => $product->id,
                    ]);
            });
    }
}
