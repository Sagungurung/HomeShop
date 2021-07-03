<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    use HasFactory;
    protected $fillable=['firstname','lastname','phone_no','address','shopname','email','password'];

    public function products(){
        return $this->hasMany(Products::class);
    }
}
