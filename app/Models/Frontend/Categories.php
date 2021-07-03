<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status','slug'];

    public function products(){
        // return $this->hasMany('App\Products');
        return $this->hasMany(Products::class);
    }
}
