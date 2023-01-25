<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Our extends Model
{
    protected $table = 'ours';
    protected $fillable = [
        'title','slug','description','image'
    ];

    protected function image(): our
    {
        return our::make(
            get: fn ($value) => asset('/storage/ours/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
