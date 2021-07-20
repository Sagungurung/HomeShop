<?php

namespace App\Models\Frontend;

use App\Models\Admin\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable=['pname','pprice','pcolor','psize','pquantity','category_id','seller_id','pimage','pstatus'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function seller(){
        return $this->belongsTo(Seller::class,'seller_id','id');
    }
    
}
