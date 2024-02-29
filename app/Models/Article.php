<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','subtitle','body','img','user_id','category_id'
    ];
    public function toSearchableArray(){
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'img' => $this->img,
            'user_id' => $this->user_id,
            'category_id' => $category ? $category->id : null,
    ];
    return $array;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public static function getLatestAd()
    {
        return self::latest()->first();
    }
}
