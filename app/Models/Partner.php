<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    protected $fillable = 
    [
        'name','slug','title','description','address','contact',
        'web','fb','ig','tt','linkedin','tw','image'
    ];
    protected function image(): Partner
    {
        return Partner::make(
            get: fn ($value) => asset('/storage/partners/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
