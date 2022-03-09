<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/by-age' => [[['_route' => 'by-age', '_controller' => 'App\\Controller\\ByAgeController::byAge'], null, null, null, false, false, null]],
        '/by-brand' => [[['_route' => 'by-brand', '_controller' => 'App\\Controller\\ByBrandController::byBrand'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::hotDeals'], null, null, null, false, false, null]],
        '/hot-deals' => [[['_route' => 'hot-deals', '_controller' => 'App\\Controller\\HotDealsController::hotDeals'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\ShopToysController::index'], null, null, null, false, false, null]],
        '/shop-toys' => [[['_route' => 'shop-toys', '_controller' => 'App\\Controller\\ShopToysController::shopToys'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
