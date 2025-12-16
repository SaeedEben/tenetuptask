<?php

namespace App\Models\Product;

use App\Enum\Language\Languages;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string  $id
 *
 * @property string  $locale
 * @property string  $title
 * @property string  $description
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
class SeoElement extends Model
{
    /** @use HasFactory<\Database\Factories\Product\SeoElementFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;

    protected $fillable = ['locale', 'title', 'description'];

    protected $casts = [
        'locale' => Languages::class,
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
