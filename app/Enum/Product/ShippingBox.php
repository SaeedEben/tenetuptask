<?php

namespace App\Enum\Product;

enum ShippingBox: string
{
    case small = 'Small';
    case medium = 'Medium';
    case large = 'Large';

    public static function values() :array
    {
        return array_column(self::cases(), 'value');
    }
}
