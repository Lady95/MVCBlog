<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['billet_id', 'user_id', 'comment'];

    public function billet() {
        return $this->belongsTo(Billet::class); 
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id'); 
    }
}