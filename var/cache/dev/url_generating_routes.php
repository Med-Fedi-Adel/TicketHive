<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_event' => [[], ['_controller' => 'App\\Controller\\AddEventController::addEvent'], [], [['text', '/addEvent']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'delete_user' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'cart_index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/add']], [], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/remove']], [], [], []],
    'cart_payment' => [[], ['_controller' => 'App\\Controller\\CartController::payment'], [], [['text', '/cart/checkout']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::sendEmail'], [], [['text', '/contact']], [], [], []],
    'event_description' => [['id'], ['_controller' => 'App\\Controller\\DescriptionController::showEventAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eventDescription']], [], [], []],
    'event' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event']], [], [], []],
    'event.filterType' => [['eventType'], ['_controller' => 'App\\Controller\\EventController::filterByType'], [], [['variable', '/', '[^/]++', 'eventType', true], ['text', '/event']], [], [], []],
    'event.filter' => [['type'], ['_controller' => 'App\\Controller\\EventController::filterBy'], [], [['variable', '/', '[^/]++', 'type', true], ['text', '/event/filter']], [], [], []],
    'event.filter.today' => [[], ['_controller' => 'App\\Controller\\EventController::filterToday'], [], [['text', '/main/Today']], [], [], []],
    'event.filter.weekend' => [[], ['_controller' => 'App\\Controller\\EventController::filterWeekend'], [], [['text', '/main/Weekend']], [], [], []],
    'event.filter.upcoming' => [[], ['_controller' => 'App\\Controller\\EventController::filterUpcoming'], [], [['text', '/main/Upcomings']], [], [], []],
    'event.search' => [['keywords'], ['keywords' => null, '_controller' => 'App\\Controller\\EventController::search'], [], [['variable', '/', '[^/]++', 'keywords', true], ['text', '/event/Search/Keywords']], [], [], []],
    'feedback' => [[], ['_controller' => 'App\\Controller\\FeedbackController::index'], [], [['text', '/feedback']], [], [], []],
    'login_signup' => [[], ['_controller' => 'App\\Controller\\LoginSignupController::index'], [], [['text', '/loginsignup']], [], [], []],
    'login_signin' => [[], ['_controller' => 'App\\Controller\\LoginSignupController::signin'], [], [['text', '/loginsigin']], [], [], []],
    'delete_session' => [[], ['_controller' => 'App\\Controller\\LoginSignupController::delete_session'], [], [['text', '/delete']], [], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/main']], [], [], []],
    'main.create_event' => [[], ['_controller' => 'App\\Controller\\MainController::createEventPage'], [], [['text', '/main/createevent']], [], [], []],
    'paymentEvent' => [[], ['_controller' => 'App\\Controller\\PaymentController::checkout'], [], [['text', '/payment']], [], [], []],
    'app_pdf' => [[], ['_controller' => 'App\\Controller\\PdfController::index'], [], [['text', '/pdf']], [], [], []],
    'generated_pdf' => [['id'], ['_controller' => 'App\\Controller\\PdfController::generatePdf'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/generated']], [], [], []],
    'ticket' => [[], ['_controller' => 'App\\Controller\\TicketController::index'], [], [['text', '/ticket']], [], [], []],
    'app_update' => [[], ['_controller' => 'App\\Controller\\UpdateController::index'], [], [['text', '/update']], [], [], []],
];
