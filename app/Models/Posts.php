<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Posts extends Model
{
    use HasFactory;


    // public function comments(){
    //     return $this->belongsTo(comments::class);
    // }

    protected $table = "posts";
    protected $fillable = [
        "nickname",
        "caption"
    ];

    public function comments(){
        return $this->hasMany(comments::class);
    }

}
