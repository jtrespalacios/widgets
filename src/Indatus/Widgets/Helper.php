<?php
namespace Indatus\Widgets;


class Helper
{
    public static function expandOptions($options)
    {
        if (empty($options)) return '';

        $optionsString = '';
        foreach ($options as $key => $val) {
            $optionsString .= "$key='$val' ";
        }

        return $optionsString;
    }
}