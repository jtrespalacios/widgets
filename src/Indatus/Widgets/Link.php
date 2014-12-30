<?php
namespace Indatus\Widgets;

use Illuminate\Support\Facades\View;

class Link
{
    public static function generate($displayText, $target, $options = [])
    {
        return View::make('widgets::link', compact('displayText', 'target', 'options'));
    }
}