<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    public $timestamps = true;
    protected $fillable = ['name', 'description'];

}
