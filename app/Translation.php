<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = "Translations";
    
    protected $fillable = ['translate','id_words'];


    public function dictionaries()
    {
        return $this->belongsTo('App\Dictionary', 'id_words');
    }
}


