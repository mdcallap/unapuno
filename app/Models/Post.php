<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected  $fillable = ['type','title','content','file','status','subcategory_id','user_id'];

    public function files() {
        return $this->hasMany(File::class);        
    }

    public function user() {
        return $this->belongsTo(User::class);        
    }

    // relacion uno a muchos inversa
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }


    // relacion muchos a muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
