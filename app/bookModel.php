<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookModel extends Model
{
    protected $table = 'books';
    protected $fillable = ['id', 'title', 'description'];
}
