<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/shop_by_age' => [[['_route' => 'shop_by_age', '_controller' => 'App\\Controller\\LuckyController::shop_by_age'], null, null, null, false, false, null]],
        '/shop_by_category' => [[['_route' => 'shop_by_category', '_controller' => 'App\\Controller\\LuckyController::shop_by_category'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\LuckyController::contact'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\LuckyController::registration'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\QuoteController::index'], null, null, null, false, false, null]],
        '/siema' => [[['_route' => 'cokolwiek', '_controller' => 'App\\Controller\\QuoteController::costam'], null, null, null, false, false, null]],
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
