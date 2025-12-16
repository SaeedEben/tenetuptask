<?php

namespace App\Models\Product;

use App\Enum\Product\ProductGender;
use App\Models\Shop\Brand;
use App\Models\Shop\Shop;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property string               $id
 *
 * @property string               $gender
 * @property string               $code
 *
 * @property string               $shop_id
 * @property string               $brand_id
 * @property string               $category_id
 * @property string               $sub_category_id
 * @property string               $collection_id
 *
 * @property Carbon               $created_at
 * @property Carbon               $updated_at
 * -------------------------------------- Relations
 * @property Shop                 $shop
 * @property Brand                $brand
 * @property Category             $category
 * @property SubCategory          $subCategory
 * @property Collection           $collection
 * @property ProductTranslation[] $productTranslations
 * @property SeoElement[]         $seoElements
 * @property Note[]               $notes
 * @property ProductFile[]        $productFiles
 * @property Shipping             $shipping
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

    protected $fillable = [
        'gender', 'code', 'shop_id',
        'brand_id', 'category_id',
        'sub_category_id', 'collection_id',
    ];
    protected $casts    = [
        'gender' => ProductGender::class,
    ];

    // Relations ------------------------------------------------------------------------
    public function shop() :BelongsTo
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function brand() :BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function collection() :BelongsTo
    {
        return $this->belongsTo(Collection::class, 'collection_id');
    }

    public function productTranslations() :HasMany
    {
        return $this->hasMany(ProductTranslation::class);
    }

    public function seoElements() :HasMany
    {
        return $this->hasMany(SeoElement::class);
    }

    public function materials() :HasMany
    {
        return $this->hasMany(Material::class);
    }

    public function notes() :HasMany
    {
        return $this->hasMany(Note::class);
    }

    public function productFiles() :HasMany
    {
        return $this->hasMany(ProductFile::class);
    }

    public function shipping() :HasOne
    {
        return $this->hasOne(Shipping::class);
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

    public function getSeoElement($locale) :?SeoElement
    {
        /** @var SeoElement $translation */
        $translation = $this->seoElements()
            ->where('locale', $locale)
            ->first();

        return $translation;
    }

}
