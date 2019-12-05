<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'url'];
}
