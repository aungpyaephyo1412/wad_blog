<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class Comment extends Model
{
    use HasFactory;

    public function user()
    {
       return $this->belongsTo(User::class,'user_id','id');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class,'parent_id','id');
    }
}
