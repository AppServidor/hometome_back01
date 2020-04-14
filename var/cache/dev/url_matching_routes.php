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
        '/ciudad' => [[['_route' => 'ciudad_index', '_controller' => 'App\\Controller\\CiudadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ciudad/new' => [[['_route' => 'ciudad_new', '_controller' => 'App\\Controller\\CiudadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/foto' => [[['_route' => 'foto_index', '_controller' => 'App\\Controller\\FotoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/foto/new' => [[['_route' => 'foto_new', '_controller' => 'App\\Controller\\FotoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/home' => [[['_route' => 'home_user', '_controller' => 'App\\Controller\\HomeController::home_user'], null, null, null, false, false, null]],
        '/home/perfil' => [[['_route' => 'perfil_show', '_controller' => 'App\\Controller\\HomeController::show'], null, ['GET' => 0], null, false, false, null]],
        '/home/perfil/editar' => [[['_route' => 'perfil_user', '_controller' => 'App\\Controller\\HomeController::perfil_user'], null, null, null, false, false, null]],
        '/preferencias/new' => [[['_route' => 'preferencias_new', '_controller' => 'App\\Controller\\PreferenciasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/ciudad/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/foto/([^/]++)(?'
                    .'|(*:235)'
                    .'|/edit(*:248)'
                    .'|(*:256)'
                .')'
                .'|/([^/]++)(*:274)'
                .'|/p(?'
                    .'|icUser/([^/]++)(*:302)'
                    .'|referencias(?'
                        .'|(*:324)'
                        .'|/([^/]++)(?'
                            .'|(*:344)'
                            .'|/edit(*:357)'
                            .'|(*:365)'
                        .')'
                        .'|(*:374)'
                    .')'
                .')'
                .'|/register(?'
                    .'|(*:396)'
                    .'|Admin(?'
                        .'|(*:412)'
                    .')'
                    .'|(*:421)'
                .')'
                .'|/log(?'
                    .'|in(*:439)'
                    .'|out(*:450)'
                .')'
                .'|/user(?'
                    .'|(*:467)'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|(*:490)'
                            .'|/edit(*:503)'
                            .'|(*:511)'
                        .')'
                        .'|foto/([^/]++)(*:533)'
                    .')'
                    .'|(*:542)'
                .')'
                .'|/ciudad(*:558)'
                .'|/foto(*:571)'
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
        188 => [[['_route' => 'ciudad_show', '_controller' => 'App\\Controller\\CiudadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'ciudad_edit', '_controller' => 'App\\Controller\\CiudadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'ciudad_delete', '_controller' => 'App\\Controller\\CiudadController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        235 => [[['_route' => 'foto_show', '_controller' => 'App\\Controller\\FotoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'foto_edit', '_controller' => 'App\\Controller\\FotoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'foto_delete', '_controller' => 'App\\Controller\\FotoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        274 => [[['_route' => 'perfil_delete', '_controller' => 'App\\Controller\\HomeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        302 => [[['_route' => 'perfilPic_delete', '_controller' => 'App\\Controller\\HomeController::deletePicture'], ['id'], ['DELETE' => 0], null, false, true, null]],
        324 => [[['_route' => 'preferencias_index', '_controller' => 'App\\Controller\\PreferenciasController::index'], [], ['GET' => 0], null, true, false, null]],
        344 => [[['_route' => 'preferencias_show', '_controller' => 'App\\Controller\\PreferenciasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        357 => [[['_route' => 'preferencias_edit', '_controller' => 'App\\Controller\\PreferenciasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        365 => [[['_route' => 'preferencias_delete', '_controller' => 'App\\Controller\\PreferenciasController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        374 => [[['_route' => 'preferencias', '_controller' => 'App\\Controller\\PreferenciasController::index'], [], null, null, false, false, null]],
        396 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        412 => [
            [['_route' => 'register_admin', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], [], null, null, false, false, null],
            [['_route' => 'registro_admin', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], [], null, null, false, false, null],
        ],
        421 => [[['_route' => 'registro_usuarios', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        439 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        450 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], ['GET' => 0], null, false, false, null]],
        467 => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], [], ['GET' => 0], null, true, false, null]],
        490 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        503 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        511 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        533 => [[['_route' => 'pic_delete', '_controller' => 'App\\Controller\\UserController::deletePicture'], ['id'], ['DELETE' => 0], null, false, true, null]],
        542 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], [], null, null, false, false, null]],
        558 => [[['_route' => 'ciudad', '_controller' => 'App\\Controller\\PreferenciasController::index'], [], null, null, false, false, null]],
        571 => [
            [['_route' => 'foto', '_controller' => 'App\\Controller\\FotoController::index'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
