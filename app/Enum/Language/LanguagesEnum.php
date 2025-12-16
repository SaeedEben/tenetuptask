<?php

namespace App\Enum\Language;

enum LanguagesEnum: string
{
    case Arabic = 'arabic';
    case English = 'english';
    case French = 'french';


    public static function values() :array
    {
        return array_column(self::cases(), 'value');
    }
}
