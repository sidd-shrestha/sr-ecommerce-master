<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $table= 'sellers';
    protected $fillable = [
        'product_id',
        'seller_name',
        'selling_price',
        'sold_date',
        'sold_quantity',
    ];
    public function product() {

        return $this->belongsTo(Product::class,'product_id','id');
    }
}
