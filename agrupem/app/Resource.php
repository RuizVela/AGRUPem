<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Resource extends Model
{
    protected $fillable = ['id', 'title_catalan', 'title_spanish', 'url'];
    
    
    public function getCatalanTitle()
    {
        $title = $this->title_catalan;
        return $title;
    }
    public function getSpanishTitle()
    {
        $title = $this->title_spanish;
        return $title;
    }
    public function getLocalTitle()
    {
        if ((App::isLocale('es')) and ($this->title_spanish != null)) {
            return $this->getSpanishTitle();
        }
        return $this->getCatalanTitle();
    }
}