<?php
namespace Indatus\Widgets;

use Illuminate\Support\Facades\View;

class TextField
{
    public static function generate($name, $data = null, $options = [])
    {
        return View::make('widgets::text_field', compact('name', 'data', 'options'));
    }
}