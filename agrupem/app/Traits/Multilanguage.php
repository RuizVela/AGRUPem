<?php
namespace App\traits;
use App;

trait Multilanguage
{
    private function getCatalanTitle()
    {
        $title = $this->title_catalan;
        return $title;
    }
    private function getSpanishTitle()
    {
        if  ($this->title_spanish == null)
        {
            return $this->title_catalan;
        }
        $title = $this->title_spanish;
        return $title;
    }
    public function getLocalTitle()
    {
        if (App::isLocale('es')) {
            return $this->getSpanishTitle();
        }
        return $this->getCatalanTitle();
    }
}