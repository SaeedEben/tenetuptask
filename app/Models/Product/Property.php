<?php

namespace App\Models\Product;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string            $id
 *
 * @property string            $name
 *
 * @property Carbon            $created_at
 * @property Carbon            $updated_at
 * -------------------------------------- Relations
 * @property PropertyValue[]   $propertyValues
 * @property VariantTemplate[] $variantTemplates
 *
 * -------------------------------------- Attributes
 *
 */
class Property extends Model
{
    /** @use HasFactory<\Database\Factories\Product\PropertyFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;

    protected $fillable = ['name'];


    // Relations ------------------------------------------------------------------------
    public function propertyValues() :HasMany
    {
        return $this->hasMany(PropertyValue::class);
    }

    public function variantTemplates() :HasMany
    {
        return $this->hasMany(VariantTemplate::class);
    }

    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
