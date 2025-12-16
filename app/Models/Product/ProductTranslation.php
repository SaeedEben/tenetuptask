<?php

namespace App\Models\Product;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 *
 * @property
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * -------------------------------------- Relations
 *
 * -------------------------------------- Attributes
 *
 */
class ProductTranslation extends Model
{
    /** @use HasFactory<\Database\Factories\Product\ProductTranslationFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey   = 'string';
    public    $incrementing = false;

    // Relations ------------------------------------------------------------------------
    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
