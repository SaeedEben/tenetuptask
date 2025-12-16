<?php

namespace App\Models\Boutique;

use App\Models\Product\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string    $id
 *
 * @property string    $name
 *
 * @property Carbon    $created_at
 * @property Carbon    $updated_at
 * -------------------------------------- Relations
 * @property Product[] $products
 *
 * -------------------------------------- Attributes
 *
 */
class Boutique extends Model
{
    /** @use HasFactory<\Database\Factories\Boutique\BoutiqueFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;

    // Relations ------------------------------------------------------------------------
    public function products() :HasMany
    {
        return $this->hasMany(Product::class, 'boutique_id');
    }


    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
