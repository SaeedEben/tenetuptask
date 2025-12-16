<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string      $id
 *
 * @property string      $name
 * @property string      $email
 * @property-read string $password
 *
 * @property Carbon      $email_verified_at
 *
 * @property Carbon      $created_at
 * @property Carbon      $updated_at
 * -------------------------------------- Relations
 *
 * -------------------------------------- Attributes
 *
 */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasUuids;

    protected $primaryKey   = 'string';
    public    $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts() :array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }

    // Relations ------------------------------------------------------------------------
    // Attributes ------------------------------------------------------------------------
    // Scopes ------------------------------------------------------------------------
    // Methods ------------------------------------------------------------------------

}
