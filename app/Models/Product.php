<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'categorys_id',
        'price',
        'description',
        'picture'
    ];

    // public function categories(){
    //     return $this->belongsTo(categories::class, 'categorys_id');
    // }

}
