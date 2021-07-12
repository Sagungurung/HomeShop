<?php

namespace App\Models\Admin;

use App\Models\Frontend\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status','slug','show_in_menu'];
}