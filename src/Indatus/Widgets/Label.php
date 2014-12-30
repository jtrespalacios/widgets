<?php
namespace Indatus\Widgets;

use Illuminate\Support\Facades\View;

class Label
{
    public static function generate($displayText, $for, $options)
    {
        return View::make('widgets::label', compact('displayText', 'for', 'options'));
    }
}