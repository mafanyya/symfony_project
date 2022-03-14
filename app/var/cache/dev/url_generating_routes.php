<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'by-age' => [[], ['_controller' => 'App\\Controller\\ByAgeController::byAge'], [], [['text', '/by-age']], [], [], []],
    'by-age1' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_02'], [], [['text', '/by-age/0--24-months']], [], [], []],
    'by-age2' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_34'], [], [['text', '/by-age/3--4-years']], [], [], []],
    'by-age3' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_57'], [], [['text', '/by-age/5--7-years']], [], [], []],
    'by-age4' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_810'], [], [['text', '/by-age/8--10-years']], [], [], []],
    'by-age5' => [[], ['_controller' => 'App\\Controller\\ByAgeController::age_11'], [], [['text', '/by-age/11-years-and-up']], [], [], []],
    'by-category' => [[], ['_controller' => 'App\\Controller\\ByCategoryController::byCategory'], [], [['text', '/by-category']], [], [], []],
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
];
