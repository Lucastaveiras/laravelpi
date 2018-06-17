<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliografia extends Model
{
  protected  $fillable = ['bibliografia_titulo', 'bibliografia_autor', 'bibliografia_isbn', 'bibliografia_editora'];
}
