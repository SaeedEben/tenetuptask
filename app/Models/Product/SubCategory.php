<?php

namespace App\Models\Product;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string   $id
 *
 * @property string   $name
 * @property string   $category_id
 *
 * @property Carbon   $created_at
 * @property Carbon   $updated_at
 * -------------------------------------- Relations
 * @property Category $category
 *
 * -------------------------------------- Attributes
 *
 */
class SubCategory extends Model
{
    /** @use HasFactory<\Database\Factories\Product\SubCategoryFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;

    // Relations ------------------------------------------------------------------------
    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
