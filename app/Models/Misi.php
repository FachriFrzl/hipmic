<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    protected $table = 'misis';
    protected $fillable = [
        'misi','slug','content','image'
    ];

    protected function image(): Misi
    {
        return Misi::make(
            get: fn ($value) => asset('/storage/misi/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
