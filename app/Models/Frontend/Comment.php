<?php

namespace App\Models\Frontend;

use App\Models\Admin\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['blog_id','product_id','visitor_id','comment'];

    public function blog(){
        return $this->belongsTo(Blog::class,'blog_id','id');
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function visitor(){
        return $this->belongsTo(Visitor::class,'visitor_id','id');
    }
}
