<?php

namespace App\Models\Product;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string      $id
 *
 * @property string      $name
 *
 * @property Carbon      $created_at
 * @property Carbon      $updated_at
 * -------------------------------------- Relations
 * @property SubCategory $subCategories
 * @property Product     $products
 * -------------------------------------- Attributes
 *
 */
class Category extends Model
{
    /** @use HasFactory<\Database\Factories\Product\CategoryFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;


    // Relations ------------------------------------------------------------------------
    public function subCategories() :HasMany
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }

    public function products() :HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
