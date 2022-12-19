<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'abouts';
    protected $fillable =[
        'title',
        'thumbnail',
        'description',
        'quote'
    ];
    public function setTiTleAttribute($value){
        $this->attributes['title'] = ucwords($value);
    }
}
