<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos inversa

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos

    public function Tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
