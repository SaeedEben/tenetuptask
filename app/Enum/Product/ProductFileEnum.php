<?php

namespace App\Enum\Product;

enum ProductFileEnum: string
{
    case gallery_image = 'Gallery Image';
    case thumbnail_image = 'Thumbnail Image';
    case variant_image = 'Variant Image';
    case video = 'Video';

    public static function values() :array
    {
        return array_column(self::cases(), 'value');
    }
}
