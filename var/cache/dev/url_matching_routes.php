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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/addEvent' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\AddEventController::addEvent'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/checkout' => [[['_route' => 'cart_payment', '_controller' => 'App\\Controller\\CartController::payment'], null, null, null, false, false, null]],
        '/users/search' => [[['_route' => 'search_users', '_controller' => 'App\\Controller\\CartController::searchUsers'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/main/Today' => [[['_route' => 'event.filter.today', '_controller' => 'App\\Controller\\EventController::filterToday'], null, null, null, false, false, null]],
        '/main/Weekend' => [[['_route' => 'event.filter.weekend', '_controller' => 'App\\Controller\\EventController::filterWeekend'], null, null, null, false, false, null]],
        '/main/Upcomings' => [[['_route' => 'event.filter.upcoming', '_controller' => 'App\\Controller\\EventController::filterUpcoming'], null, null, null, false, false, null]],
        '/feedback' => [[['_route' => 'feedback', '_controller' => 'App\\Controller\\FeedbackController::index'], null, null, null, false, false, null]],
        '/loginsignup' => [[['_route' => 'login_signup', '_controller' => 'App\\Controller\\LoginSignupController::index'], null, null, null, false, false, null]],
        '/loginsigin' => [[['_route' => 'login_signin', '_controller' => 'App\\Controller\\LoginSignupController::signin'], null, null, null, false, false, null]],
        '/delete' => [[['_route' => 'delete_session', '_controller' => 'App\\Controller\\LoginSignupController::delete_session'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/main/createevent' => [[['_route' => 'main.create_event', '_controller' => 'App\\Controller\\MainController::createEventPage'], null, null, null, false, false, null]],
        '/generate' => [[['_route' => 'pdf_gen', '_controller' => 'App\\Controller\\MainController::pdf_gen'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'paymentEvent', '_controller' => 'App\\Controller\\PaymentController::checkout'], null, null, null, false, false, null]],
        '/pdf' => [[['_route' => 'app_pdf', '_controller' => 'App\\Controller\\PdfController::index'], null, null, null, false, false, null]],
        '/generated' => [[['_route' => 'generated_pdf', '_controller' => 'App\\Controller\\PdfController::generatePdf'], null, null, null, false, false, null]],
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
                .'|/admin/user/([^/]++)(*:189)'
                .'|/cart/(?'
                    .'|add/([^/]++)(*:218)'
                    .'|remove/([^/]++)(*:241)'
                .')'
                .'|/event(?'
                    .'|Description/([^/]++)(*:279)'
                    .'|/(?'
                        .'|([^/]++)(*:299)'
                        .'|filter/([^/]++)(*:322)'
                        .'|Search/Keywords(?:/([^/]++))?(*:359)'
                    .')'
                .')'
                .'|/ticket/([^/]++)(*:385)'
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
        189 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'event_description', '_controller' => 'App\\Controller\\DescriptionController::showEventAction'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'event.filterType', '_controller' => 'App\\Controller\\EventController::filterByType'], ['eventType'], null, null, false, true, null]],
        322 => [[['_route' => 'event.filter', '_controller' => 'App\\Controller\\EventController::filterBy'], ['type'], null, null, false, true, null]],
        359 => [[['_route' => 'event.search', 'keywords' => null, '_controller' => 'App\\Controller\\EventController::search'], ['keywords'], null, null, false, true, null]],
        385 => [
            [['_route' => 'ticket', '_controller' => 'App\\Controller\\TicketController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
