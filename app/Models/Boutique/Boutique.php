<?php

namespace App\Models\Boutique;

use Carbon\Carbon;
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
class Boutique extends Model
{
    /** @use HasFactory<\Database\Factories\Boutique\BoutiqueFactory> */
    use HasFactory;


    // Relations ------------------------------------------------------------------------
    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
