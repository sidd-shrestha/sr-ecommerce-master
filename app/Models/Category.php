<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table= 'categories';
    protected $fillable = [
        'category_name',
        'groups_id',
        'slug',
        'status',
        'popular',
        'meta_description',
        'meta_keywords',
        'category_image',

    ];
    public function groups() {

        return $this->belongsTo(Groups::class,'group_id','id');
    }
    public function subcategory()
    {
        return $this->hasMany('App\Models\SubCategories');
    }

}
