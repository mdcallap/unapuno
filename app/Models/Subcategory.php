<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected  $fillable = ['name', 'category_id'];

    // relacion uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relacion muchos a muchos
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
