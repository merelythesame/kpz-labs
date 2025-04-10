<?php

namespace Composite;

class MetaDataFlyweightFactory
{
    private static array $storage = [];

    public static function getFlyweight(string $tagName, string $displayType, string $closingType): MetaDataFlyweight {
        $key = "{$tagName}_{$displayType}_{$closingType}";

        if (!isset(self::$storage[$key])) {
            self::$storage[$key] = new MetaDataFlyweight($tagName, $displayType, $closingType);
        }

        return self::$storage[$key];
    }

    public static function getCount(): int {
        return count(self::$storage);
    }

}