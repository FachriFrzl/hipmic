<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $table = 'motos';
    protected $fillable = [
        'moto','slug','content','image'
    ];

    protected function image(): Moto
    {
        return Moto::make(
            get: fn ($value) => asset('/storage/moto/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
