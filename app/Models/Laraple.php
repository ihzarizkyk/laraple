<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laraple extends Model
{
    use HasFactory;

    protected $table = "_laraples";

    public function category()
    {
        return $this->hasOne(Category::class,"artikel_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class,"id");
    } 
}
