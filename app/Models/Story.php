<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'stories';
    protected $fillable = [
        'title','slug','company_name','location','description','image','video'
    ];

    protected function image(): Story
    {
        return Story::make(
            get: fn ($value) => asset('/storage/stories/' . $value),
        );
    }

    public function getRouteKeyName()

    {
        return 'slug';
    }
}
