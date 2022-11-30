<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    protected $fillable = ['url'];

    use HasFactory;

    //Relacion polimorfica

    public function imageable(){
        return $this->morphTo();
    }
}
