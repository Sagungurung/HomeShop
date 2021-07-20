<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Visitor extends Authenticatable
{
    use HasFactory;
    protected $table = "visitors";
    protected $fillable=['firstname','lastname','phone_no','address','city','areacode','email','password'];
}
