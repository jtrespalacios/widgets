<?php
namespace Indatus\Widgets;

use Illuminate\Support\Facades\View;

class Select
{
    public static function generate($options, $selected = null)
    {
        return View::make('widgets::select', compact('options', 'selected'));
    }
}