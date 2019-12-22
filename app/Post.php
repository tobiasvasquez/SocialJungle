<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tema;
use App\User;

class Post extends Model
{
  protected $guarded = [];

    public function tema(){
        return $this->belongsTo(Tema::class, 'temas_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}