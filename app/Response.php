<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{

    public $table = 'response';
    //
    protected $fillable = [
      'value',
      'description',
      'question_id',
      'user_id',
    ];
}
