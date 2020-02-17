<?php

class CurrentItem
{
    private static $ourServices = ['ourServices', 'air', 'ocean', 'shopper', 'delivery'];
    private static $home = ['index', '/', "'\'", 'home'];
    private static $features = ['sc-1'];
    private static $resources = ['customs', 'restricted', 'insurance'];
    private static $rates = ['rates'];
    private static $faqs = ['faqs'];

    public function getCurrentItem($item)
    {
        return [
            'ourServices' => in_array($item, self::$ourServices) ? 'current-menu-item' : '',
            'home' => in_array($item, self::$home) ? 'current-menu-item' : '',
            'features' => in_array($item, self::$features) ? 'current-menu-item' : '',
            'resources' => in_array($item, self::$resources) ? 'current-menu-item' : '',
            'rates' => in_array($item, self::$rates) ? 'current-menu-item' : '',
            'faqs' => in_array($item, self::$faqs) ? 'current-menu-item' : '',
        ];
    }
}
