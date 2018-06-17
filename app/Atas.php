<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atas extends Model
{
    //
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected  $fillable = ['atas_AtaTexto', 'atas__Titulo', 'atas_Data'];

    /**
    * The attributes that should be casted to native types.
    *
    * @var array
    */
    protected $casts = [
        'atas_AtaTexto' => 'text',
    ];
}
