<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature_products extends Model
{
    use HasFactory;

    protected $table = 'feature_products';

    protected $fillable = [
        'name', 'class', 'price', 'heading', 'slug'
    ];


}