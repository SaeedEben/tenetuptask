<?php

namespace App\Models\Product;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 *
 * @property string $name
 * @property string $category_id
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * -------------------------------------- Relations
 *
 * -------------------------------------- Attributes
 *
 */
class SubCategory extends Model
{
    /** @use HasFactory<\Database\Factories\Product\SubCategoryFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey   = 'string';
    public    $incrementing = false;

    // Relations ------------------------------------------------------------------------
    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
