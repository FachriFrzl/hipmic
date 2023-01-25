<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table = 'joins';
    protected $fillable = [
        'title','slug','description','image'
    ];

    protected function image(): Join
    {
        return Join::make(
            get: fn ($value) => asset('/storage/join/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }

}
