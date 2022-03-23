<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'by-age' => [[], ['_controller' => 'App\\Controller\\ByAgeController::byAge'], [], [['text', '/by-age']], [], [], []],
    'by-age1' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_02'], [], [['text', '/by-age/0--2-years']], [], [], []],
    'by-age2' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_34'], [], [['text', '/by-age/3--4-years']], [], [], []],
    'by-age3' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_57'], [], [['text', '/by-age/5--7-years']], [], [], []],
    'by-age4' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_810'], [], [['text', '/by-age/8--10-years']], [], [], []],
    'by-age5' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_11'], [], [['text', '/by-age/11-years-and-up']], [], [], []],
    'by-category' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::byCategory'], [], [['text', '/by-category']], [], [], []],
    'show-one' => [['id'], ['_controller' => 'App\\Controller\\ByCategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show']], [], [], []],
    'by-category1' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::actionFigures'], [], [['text', '/by-category/action-figures']], [], [], []],
    'by-category2' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::babyAndPreschoolToys'], [], [['text', '/by-category/baby-and-preschool-toys']], [], [], []],
    'by-category3' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::bikesAndScooters'], [], [['text', '/by-category/bikes-and-scooters']], [], [], []],
    'by-category4' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::buildingSets'], [], [['text', '/by-category/building-sets']], [], [], []],
    'by-category5' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::dollsAndStuffedAnimals'], [], [['text', '/by-category/dolls-and-stuffed-animals']], [], [], []],
    'by-category6' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::gamesAndPuzzles'], [], [['text', '/by-category/games-and-puzzles']], [], [], []],
    'by-category7' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::artsAndCrafts'], [], [['text', '/by-category/arts-and-crafts']], [], [], []],
    'by-category8' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::learning'], [], [['text', '/by-category/learning']], [], [], []],
    'by-category9' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::outdoorPlay'], [], [['text', '/by-category/outdoor-play']], [], [], []],
    'by-category10' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::pretendPlay'], [], [['text', '/by-category/pretend-play']], [], [], []],
    'by-category11' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::steamToys'], [], [['text', '/by-category/steam-toys']], [], [], []],
    'by-category12' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::remoteControlToys'], [], [['text', '/by-category/remote-control-toys']], [], [], []],
    'root' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::hotDeals'], [], [['text', '/contact']], [], [], []],
    'hot-deals' => [[], ['_controller' => 'App\\Controller\\HotDealsController::hotDeals'], [], [['text', '/hot-deals']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'test' => [[], ['_controller' => 'App\\Controller\\TestController::hotDeals'], [], [['text', '/test']], [], [], []],
];
