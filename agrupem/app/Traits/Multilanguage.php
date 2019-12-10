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
    private function getCatalanContent()
    {
        $content = $this->content_catalan;
        return $content;
    }
    private function getSpanishContent()
    {
        if  ($this->content_spanish == null)
        {
            return $this->content_catalan;
        }
        $content = $this->content_spanish;
        return $content;
    }
    public function getLocalContent()
    {
        if (App::isLocale('es')) {
            return $this->getSpanishContent();
        }
        return $this->getCatalanContent();
    }
}