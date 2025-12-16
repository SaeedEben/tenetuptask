<?php

namespace App\Models\Boutique;

use App\Models\Product\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $id
 *
 * @property string $name
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * -------------------------------------- Relations
 *
 * -------------------------------------- Attributes
 *
 */
class Brand extends Model
{
    /** @use HasFactory<\Database\Factories\Boutique\BrandFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey   = 'string';
    public    $incrementing = false;

    // Relations ------------------------------------------------------------------------
    public function products() :HasMany
    {
        return $this->hasMany(Product::class, 'brand_id');
    }

    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
