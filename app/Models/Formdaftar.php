<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Formdaftar extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name','id_number','tanda_pengenal','birth_place','birth_date','phone','description',
        'address','provinsi','kota','kecamatan','kelurahan','image'   
    ];

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/formdaftars/' . $value),
        );
    }

    /**
     * birth_date
     *
     * @return Attribute
     */
    protected function birth_date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y'),
        );
    }
}
