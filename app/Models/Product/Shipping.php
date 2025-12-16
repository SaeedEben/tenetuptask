<?php

namespace App\Models\Product;

use App\Enum\Product\ShippingBox;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string  $id
 *
 * @property string  $box
 *
 * @property boolean $has_cites_Permit
 * @property boolean $has_fad_medical_device_classification
 * @property boolean $has_dangerous_good_classification
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
class Shipping extends Model
{
    /** @use HasFactory<\Database\Factories\Product\ShippingFactory> */
    use HasFactory, HasUuids;

    protected $keyType      = 'string';
    public    $incrementing = false;

    protected $fillable = [
        'box', 'product_id', 'has_cites_Permit',
        'has_fad_medical_device_classification',
        'has_dangerous_good_classification',
    ];


    protected $casts = [
        'box'                                   => ShippingBox::class,
        'has_cites_Permit'                      => 'boolean',
        'has_fad_medical_device_classification' => 'boolean',
        'has_dangerous_good_classification'     => 'boolean',
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
