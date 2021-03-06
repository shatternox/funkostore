<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'date_purchased',
        'total_price',
        'payment_type',
        'invoice',
        'order_status',
        'transaction_proof',
    ];
    
    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

}
