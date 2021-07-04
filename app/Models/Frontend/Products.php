<?php

namespace App\Models\Frontend;

use App\Models\Admin\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable=['pname','pprice','pcolor','psize','pquantity','category_id','sellers_id','pimage','pstatus'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function sellers(){
        return $this->belongsTo(Seller::class,'sellers_id','id');
    }
}
