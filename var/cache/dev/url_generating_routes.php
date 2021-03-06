<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\AuthController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\AuthController::logout'], [], [['text', '/logout']], [], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\ContentController::index'], [], [['text', '/']], [], [], []],
    'catalogue' => [[], ['_controller' => 'App\\Controller\\ContentController::voyages'], [], [['text', '/catalogue']], [], [], []],
    'catalogueByCategory' => [['catId'], ['_controller' => 'App\\Controller\\ContentController::catalogueByCategory'], [], [['variable', '/', '[^/]++', 'catId', true], ['text', '/catalogue']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'univers_index' => [[], ['_controller' => 'App\\Controller\\UniversController::index'], [], [['text', '/univers/']], [], [], []],
    'univers_new' => [[], ['_controller' => 'App\\Controller\\UniversController::new'], [], [['text', '/univers/new']], [], [], []],
    'univers_show' => [['id'], ['_controller' => 'App\\Controller\\UniversController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/univers']], [], [], []],
    'univers_edit' => [['id'], ['_controller' => 'App\\Controller\\UniversController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/univers']], [], [], []],
    'univers_delete' => [['id'], ['_controller' => 'App\\Controller\\UniversController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/univers']], [], [], []],
    'voyage_index' => [[], ['_controller' => 'App\\Controller\\VoyageController::index'], [], [['text', '/voyage/']], [], [], []],
    'voyage_new' => [[], ['_controller' => 'App\\Controller\\VoyageController::new'], [], [['text', '/voyage/new']], [], [], []],
    'voyage_show' => [['id'], ['_controller' => 'App\\Controller\\VoyageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voyage']], [], [], []],
    'voyage_edit' => [['id'], ['_controller' => 'App\\Controller\\VoyageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/voyage']], [], [], []],
    'voyage_delete' => [['id'], ['_controller' => 'App\\Controller\\VoyageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voyage']], [], [], []],
];
