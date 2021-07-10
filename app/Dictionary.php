<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dictionary extends Model
{

    protected $table = "Inserts_words";
    
    protected  $fillable = ['id','words_ebrenques','descriptionts','types'];


    public function translations ()
    {
//      Defing table foreign key
        return $this->hasMany('App\Translation', 'id_words');
    }


}
