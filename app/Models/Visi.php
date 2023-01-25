<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    protected $table = 'visis';
    protected $fillable = [
        'visi','content','slug','image'
    ];

    protected function image(): Visi
    {
        return Visi::make(
            get: fn ($value) => asset('/storage/visi/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
