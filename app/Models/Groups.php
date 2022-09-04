<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;
    protected $table= 'groups';
    protected $fillable = [
        'category_name',
        'slug',
        'status',
        'category_image',

    ];
    public function category()
    {
        return $this->hasMany('App\Models\Category');
    }
}
