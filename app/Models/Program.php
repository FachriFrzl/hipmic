<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $fillable = [
        'name','slug','description','content','program','negara','image'
    ];
}
