<?php

namespace App\Models;

use App\Http\Controllers\Admin\SubController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'subcategory_id',
        'product_code',
        // 'brand_type',
        'slug',
        'product_name',
        'product_image',
        'product_price',
        'product_quantity',
        'product_description',
        'sale_tag',
        'offer_price',
        'status',
        'new_arrival_products',
        'featured_products',
        'offer_products',
        'trending',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];
    public function subcategory()
    {

        return $this->belongsTo(SubCategories::class, 'subcategory_id', 'id');
    }
    public function whislist()
    {

        return $this->hasMany('App\Models\Whislist');
    }
    public function seller()
    {
        return $this->hasMany('App\Models\Seller');
    }
    public function features()
    {
        return $this->hasMany('App\Models\Features');
    }
    public function cart()
    {
        return $this->hasMany('App\Models\Cart');
    }
    public function orderItem()
    {
        return $this->hasMany('App\Models\OrderItems');
    }
}
