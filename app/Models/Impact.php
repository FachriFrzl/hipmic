<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    protected $table = 'impacts';
    protected $fillable = [
        'title1','number1','title2',
        'number2','title3','number3',
        'title4','number4'
    ];
}
