<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;
    protected $table= 'sub_categories';
    protected $fillable = [
        'category_id',

        'brand_name',
        'brand_image',
        'status',
        'slug',
        'popular',
    ];
    public function categories() {

        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
