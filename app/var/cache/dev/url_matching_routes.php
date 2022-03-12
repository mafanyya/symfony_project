<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/by-age' => [[['_route' => 'by-age', '_controller' => 'App\\Controller\\ByAgeController::byAge'], null, null, null, false, false, null]],
        '/by-age/0--24-months' => [[['_route' => 'by-age1', '_controller' => 'App\\Controller\\ByAgeController::age_02'], null, null, null, false, false, null]],
        '/by-age/3--4-years' => [[['_route' => 'by-age2', '_controller' => 'App\\Controller\\ByAgeController::age_34'], null, null, null, false, false, null]],
        '/by-age/5--7-years' => [[['_route' => 'by-age3', '_controller' => 'App\\Controller\\ByAgeController::age_57'], null, null, null, false, false, null]],
        '/by-age/8--10-years' => [[['_route' => 'by-age4', '_controller' => 'App\\Controller\\ByAgeController::age_810'], null, null, null, false, false, null]],
        '/by-age/11-years-and-up' => [[['_route' => 'by-age5', '_controller' => 'App\\Controller\\ByAgeController::age_11'], null, null, null, false, false, null]],
        '/by-category' => [[['_route' => 'by-category', '_controller' => 'App\\Controller\\ByCategoryController::byCategory'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::hotDeals'], null, null, null, false, false, null]],
        '/hot-deals' => [[['_route' => 'hot-deals', '_controller' => 'App\\Controller\\HotDealsController::hotDeals'], null, null, null, false, false, null]],
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
