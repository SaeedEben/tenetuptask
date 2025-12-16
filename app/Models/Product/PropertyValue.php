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
 * @property string   $value
 *
 * @property string   $property_id
 *
 * @property Carbon   $created_at
 * @property Carbon   $updated_at
 * -------------------------------------- Relations
 * @property Property $property
 *
 * -------------------------------------- Attributes
 *
 */
class PropertyValue extends Model
{
    /** @use HasFactory<\Database\Factories\Product\PropertyValueFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;

    protected $fillable = [
        'value', 'property_id',
    ];

    // Relations ------------------------------------------------------------------------
    public function property() :BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
