<?php

class Html
{
    private static $mainTag = '<html>';
    private const END_TAG = '</html>';

    public static function openHtmlTag()
    {
        return self::$mainTag;
    }

    public static function closeHtmlTag()
    {
        return self::END_TAG;
    }
}

print Html::openHtmlTag();
print Html::closeHtmlTag();
