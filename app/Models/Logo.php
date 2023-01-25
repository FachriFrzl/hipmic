<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'company_logo','favicon'
    ];

    /**
     * company_logo
     *
     * @return Attribute
     */
    protected function company_logo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/identities/' . $value),
        );
    }
    /**
     * favicon
     *
     * @return Attribute
     */
    protected function favicon(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/identities/' . $value),
        );
    }
}
