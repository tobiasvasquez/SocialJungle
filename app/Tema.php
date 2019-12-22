<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class Tema extends Model
{
  protected $guarded = [];

  public function users(){
      return $this->belongsToMany(User::class);
  }
}
