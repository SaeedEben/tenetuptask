<?php

namespace App\Models\Product;

use App\Enum\Product\ProductGender;
use App\Models\Boutique\Boutique;
use App\Models\Boutique\Brand;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string               $id
 *
 * @property string               $gender
 * @property string               $code
 *
 * @property string               $boutique_id
 * @property string               $brand_id
 * @property string               $category_id
 * @property string               $sub_category_id
 * @property string               $collection_id
 *
 * @property Carbon               $created_at
 * @property Carbon               $updated_at
 * -------------------------------------- Relations
 * @property Boutique             $boutique
 * @property Brand                $brand
 * @property Category             $category
 * @property SubCategory          $subCategory
 * @property Collection           $collection
 * @property ProductTranslation[] $productTranslations
 *
 * -------------------------------------- Attributes
 *
 */
class Product extends Model
{
    /** @use HasFactory<\Database\Factories\Product\ProductFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;

    protected $casts = [
        'gender' => ProductGender::class,
    ];

    // Relations ------------------------------------------------------------------------
    public function boutique() :BelongsTo
    {
        return $this->belongsTo(Boutique::class, 'boutique_id');
    }

    public function brand() :BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subCategory() :BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function collection() :BelongsTo
    {
        return $this->belongsTo(Collection::class, 'collection_id');
    }

    public function productTranslations() :HasMany
    {
        return $this->hasMany(ProductTranslation::class, 'product_id');
    }

    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------
    public function getName($locale) :?string
    {
        /** @var ProductTranslation $translation */
        $translation = $this->productTranslations()->where('locale', $locale)->first();
        return $translation?->name;
    }

}
