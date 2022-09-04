<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $table= 'order_items';
    protected $fillable = [
        'order_id',
        'product_id',
        'product_price',
        'product_quantity',

    ];
    public function order() {

        return $this->belongsTo(Order::class,'order_id','id');
    }
    public function products() {

        return $this->belongsTo(Product::class,'product_id','id');
    }
}
