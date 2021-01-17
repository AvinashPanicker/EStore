<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

public function category(){
    return $this->belongsTo(Category::class);
}
public function comment(){
    return $this->hasMany(Comment::class);
}

public function shipper(){
    return $this->belongsTo(Shipper::class);
}

public function seller(){
    return $this->belongsToMany(Seller::class);
}

public function cart(){
    return $this->belongsToMany(Cart::class);
}
    
}
