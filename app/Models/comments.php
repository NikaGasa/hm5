<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class comments extends Model
{
    use HasFactory;


    protected $table = "comments";

    protected $fillable = [
        "nickname",
        "comment",
        "posts_id"   
    ];

    public function post(){
        return $this->belongsTo(Posts::class);
    }
}
