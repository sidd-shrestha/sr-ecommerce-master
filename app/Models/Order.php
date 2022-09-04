<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table= 'orders';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'country',
        'postal_code',
        'address',
        'status',
        'message',
        'payment_id',
        'payment_mode',
        'tracking_no'
    ];
    public function orderItem()
    {
        return $this->hasMany('App\Models\OrderItems');
    }
}
