<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $table = "Suggests";

    protected  $fillable = ['id','id_words_suggests','words','suggest'];
}
