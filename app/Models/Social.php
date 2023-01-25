<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = 'socials';
    protected $fillable = [
        'name','slug','description','location','image'
    ];

    protected function image(): Social
    {
        return Social::make(
            get: fn ($value) => asset('/storage/socials/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
