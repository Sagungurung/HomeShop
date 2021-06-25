<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','category_id','description','image','status','user_id'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
