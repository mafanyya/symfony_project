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
        '/by-category/action-figures' => [[['_route' => 'by-category1', '_controller' => 'App\\Controller\\ByCategoryController::actionFigures'], null, null, null, false, false, null]],
        '/by-category/baby-and-preschool-toys' => [[['_route' => 'by-category2', '_controller' => 'App\\Controller\\ByCategoryController::babyAndPreschoolToys'], null, null, null, false, false, null]],
        '/by-category/bikes-and-scooters' => [[['_route' => 'by-category3', '_controller' => 'App\\Controller\\ByCategoryController::bikesAndScooters'], null, null, null, false, false, null]],
        '/by-category/building-sets' => [[['_route' => 'by-category4', '_controller' => 'App\\Controller\\ByCategoryController::buildingSets'], null, null, null, false, false, null]],
        '/by-category/dolls-and-stuffed-animals' => [[['_route' => 'by-category5', '_controller' => 'App\\Controller\\ByCategoryController::dollsAndStuffedAnimals'], null, null, null, false, false, null]],
        '/by-category/games-and-puzzles' => [[['_route' => 'by-category6', '_controller' => 'App\\Controller\\ByCategoryController::gamesAndPuzzles'], null, null, null, false, false, null]],
        '/by-category/arts-and-crafts' => [[['_route' => 'by-category7', '_controller' => 'App\\Controller\\ByCategoryController::artsAndCrafts'], null, null, null, false, false, null]],
        '/by-category/learning' => [[['_route' => 'by-category8', '_controller' => 'App\\Controller\\ByCategoryController::learning'], null, null, null, false, false, null]],
        '/by-category/outdoor-play' => [[['_route' => 'by-category9', '_controller' => 'App\\Controller\\ByCategoryController::outdoorPlay'], null, null, null, false, false, null]],
        '/by-category/pretend-play' => [[['_route' => 'by-category10', '_controller' => 'App\\Controller\\ByCategoryController::pretendPlay'], null, null, null, false, false, null]],
        '/by-category/steam-toys' => [[['_route' => 'by-category11', '_controller' => 'App\\Controller\\ByCategoryController::steamToys'], null, null, null, false, false, null]],
        '/by-category/remote-control-toys' => [[['_route' => 'by-category12', '_controller' => 'App\\Controller\\ByCategoryController::remoteControlToys'], null, null, null, false, false, null]],
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
