<?php

namespace App\Models\Admin;

use App\Models\Frontend\Seller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','category_id','description','image','status','user_id'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function seller(){
        return $this->belongsTo(Seller::class,'sellers_id','id');
    }
}
