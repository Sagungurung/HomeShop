<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['visitor_id','product_id','quantity','id'];

    public function visitor(){
        return $this->belongsTo(Visitor::class,'visitor_id','id');
    }
    
    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
