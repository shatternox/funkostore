<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
    ];
    
    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
