<?php
namespace Indatus\Widgets;

use Illuminate\Support\Facades\View;

class Table
{
    public static function generate($data, $options = [])
    {
        return View::make('widgets::table', compact('data', 'options'));
    }
}