<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function setNameAttribute($val)
    {
        $this->attributes['name'] = ucwords($val);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
