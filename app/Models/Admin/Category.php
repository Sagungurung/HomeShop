<?php

namespace App\Models\Admin;

use App\Models\Frontend\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $table = "categories";
    protected $fillable = ['name', 'status','slug','show_in_menu'];
    
    // public function products(){
    //     return $this->hasMany(Product::class);
    // }

}