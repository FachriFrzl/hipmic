<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    protected $table = 'openings';
    protected $fillable = [
        'title','slug','description','image'
    ];

    protected function image(): Opening
    {
        return Opening::make(
            get: fn ($value) => asset('/storage/openings/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }

}
