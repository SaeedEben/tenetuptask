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
 * @property string  $surface
 * @property string  $category
 * @property string  $composition
 *
 * @property float   $percentage
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
class Material extends Model
{
    /** @use HasFactory<\Database\Factories\Product\MaterialFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;

    protected $fillable = [
        'surface', 'category', 'composition',
        'percentage', 'product_id',
    ];


    // Relations ------------------------------------------------------------------------
    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
