<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    protected $fillable = [
        'title','slug','description','image'
    ];

    protected function image(): content
    {
        return content::make(
            get: fn ($value) => asset('/storage/contents/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
