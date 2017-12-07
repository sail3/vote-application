<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public $table = 'question';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'id',
    ];
}
