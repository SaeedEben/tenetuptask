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
 * @property string  $path
 * @property string  $type
 *
 * @property integer $size
 *
 * @property string  $extension
 * @property string  $alt
 *
 * @property integer $position
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
class ProductFile extends Model
{
    /** @use HasFactory<\Database\Factories\Product\ProductFileFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;


    // Relations ------------------------------------------------------------------------
    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
