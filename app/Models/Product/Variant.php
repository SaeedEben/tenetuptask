<?php

namespace App\Models\Product;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string  $id
 *
 * @property string  $sku
 * @property float   $price
 * @property string  $stock
 *
 * @property boolean $is_default
 *
 * @property string  $product_id
 *
 * @property Carbon  $created_at
 * @property Carbon  $updated_at
 * -------------------------------------- Relations
 * @property Product $product
 *
 * -------------------------------------- Attributes
 *
 */
class Variant extends Model
{
    /** @use HasFactory<\Database\Factories\Product\VariantFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;

    protected $fillable = [];

    // Relations ------------------------------------------------------------------------
    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
