<?php

namespace App\Models\Frontend;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=['pname','pprice','pcolor','psize','pquantity','category_id','sellers_id','pimage','pstatus'];

    public function categories(){
        $this->belongsTo(Categories::class);
    }
    public function sellers(){
        $this->belongsTo(seller::class);
    }
}
