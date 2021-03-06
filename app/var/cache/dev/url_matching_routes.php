<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/by-age' => [[['_route' => 'by-age', '_controller' => 'App\\Controller\\ByAgeController::byAge'], null, null, null, false, false, null]],
        '/by-age/0--2-years' => [[['_route' => '0-2 years', '_controller' => 'App\\Controller\\ByAgeController::age_02'], null, null, null, false, false, null]],
        '/by-age/3--4-years' => [[['_route' => '3-4 years', '_controller' => 'App\\Controller\\ByAgeController::age_34'], null, null, null, false, false, null]],
        '/by-age/5--7-years' => [[['_route' => '5-7 years', '_controller' => 'App\\Controller\\ByAgeController::age_57'], null, null, null, false, false, null]],
        '/by-age/8--10-years' => [[['_route' => '8-10 years', '_controller' => 'App\\Controller\\ByAgeController::age_810'], null, null, null, false, false, null]],
        '/by-age/11-years-and-up' => [[['_route' => '11+ years', '_controller' => 'App\\Controller\\ByAgeController::age_11'], null, null, null, false, false, null]],
        '/by-category' => [[['_route' => 'by-category', '_controller' => 'App\\Controller\\ByCategoryController::byCategory'], null, null, null, false, false, null]],
        '/by-category/action-figures' => [[['_route' => 'Action figures', '_controller' => 'App\\Controller\\ByCategoryController::actionFigures'], null, null, null, false, false, null]],
        '/by-category/baby-and-preschool-toys' => [[['_route' => 'Baby and preschool toys', '_controller' => 'App\\Controller\\ByCategoryController::babyAndPreschoolToys'], null, null, null, false, false, null]],
        '/by-category/bikes-and-scooters' => [[['_route' => 'Bikes and scooters', '_controller' => 'App\\Controller\\ByCategoryController::bikesAndScooters'], null, null, null, false, false, null]],
        '/by-category/building-sets' => [[['_route' => 'Building sets', '_controller' => 'App\\Controller\\ByCategoryController::buildingSets'], null, null, null, false, false, null]],
        '/by-category/dolls-and-stuffed-animals' => [[['_route' => 'Dolls and-stuffed animals', '_controller' => 'App\\Controller\\ByCategoryController::dollsAndStuffedAnimals'], null, null, null, false, false, null]],
        '/by-category/games-and-puzzles' => [[['_route' => 'Games and puzzles', '_controller' => 'App\\Controller\\ByCategoryController::gamesAndPuzzles'], null, null, null, false, false, null]],
        '/by-category/arts-and-crafts' => [[['_route' => 'Arts and crafts', '_controller' => 'App\\Controller\\ByCategoryController::artsAndCrafts'], null, null, null, false, false, null]],
        '/by-category/learning' => [[['_route' => 'Learning', '_controller' => 'App\\Controller\\ByCategoryController::learning'], null, null, null, false, false, null]],
        '/by-category/outdoor-play' => [[['_route' => 'Outdoor play', '_controller' => 'App\\Controller\\ByCategoryController::outdoorPlay'], null, null, null, false, false, null]],
        '/by-category/pretend-play' => [[['_route' => 'Pretend play', '_controller' => 'App\\Controller\\ByCategoryController::pretendPlay'], null, null, null, false, false, null]],
        '/by-category/steam-toys' => [[['_route' => 'Steam toys', '_controller' => 'App\\Controller\\ByCategoryController::steamToys'], null, null, null, false, false, null]],
        '/by-category/remote-control-toys' => [[['_route' => 'Remote control toys', '_controller' => 'App\\Controller\\ByCategoryController::remoteControlToys'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\ContactController::cart'], null, null, null, false, false, null]],
        '/hot-deals' => [[['_route' => 'hot-deals', '_controller' => 'App\\Controller\\HotDealsController::hotDeals'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::hotDeals'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/show/([^/]++)(*:183)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [
            [['_route' => 'show-one', '_controller' => 'App\\Controller\\ByCategoryController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
