<?php
/**
 * Created by PhpStorm.
 * User: jtrespalacios
 * Date: 12/29/14
 * Time: 9:25 PM
 */

namespace Indatus\Widgets;


class Asset
{
    public static function scripts()
    {
        return '\<script src="/packages/indatus/widgets/widgets.js"></script>';;
    }

    public static function styles()
    {
        return '\<link rel="stylesheet" href="/packages/indatus/widgets/widgets.css"\>';
    }
}