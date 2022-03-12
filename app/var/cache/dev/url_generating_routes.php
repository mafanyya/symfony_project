<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'by-age' => [[], ['_controller' => 'App\\Controller\\ByAgeController::byAge'], [], [['text', '/by-age']], [], [], []],
    'by-brand' => [[], ['_controller' => 'App\\Controller\\ByBrandController::byBrand'], [], [['text', '/by-brand']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::hotDeals'], [], [['text', '/contact']], [], [], []],
    'hot-deals' => [[], ['_controller' => 'App\\Controller\\HotDealsController::hotDeals'], [], [['text', '/hot-deals']], [], [], []],
    'root' => [[], ['_controller' => 'App\\Controller\\ShopToysController::index'], [], [['text', '/']], [], [], []],
    'shop-toys' => [[], ['_controller' => 'App\\Controller\\ShopToysController::shopToys'], [], [['text', '/shop-toys']], [], [], []],
];
