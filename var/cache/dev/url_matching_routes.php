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
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/products' => [[['_route' => 'admin_products', '_controller' => 'App\\Controller\\AdminController::products'], null, null, null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\AdminController::newProduct'], null, null, null, false, false, null]],
        '/admin/product-types' => [[['_route' => 'admin_product_types', '_controller' => 'App\\Controller\\AdminController::productTypes'], null, null, null, false, false, null]],
        '/admin/product-type/new' => [[['_route' => 'admin_product_type_new', '_controller' => 'App\\Controller\\AdminController::newProductType'], null, null, null, false, false, null]],
        '/admin/stocks' => [[['_route' => 'admin_stocks', '_controller' => 'App\\Controller\\AdminController::stocks'], null, null, null, false, false, null]],
        '/admin/stock/new' => [[['_route' => 'admin_stock_new', '_controller' => 'App\\Controller\\AdminController::newStock'], null, null, null, false, false, null]],
        '/admin/export-chart' => [[['_route' => 'admin_export_chart', '_controller' => 'App\\Controller\\AdminController::exportChart'], null, ['POST' => 0], null, false, false, null]],
        '/admin/export-full-report' => [[['_route' => 'admin_export_full_report', '_controller' => 'App\\Controller\\AdminController::exportFullReport'], null, ['POST' => 0], null, false, false, null]],
        '/admin/export/dashboard-report' => [[['_route' => 'admin_export_dashboard_report', '_controller' => 'App\\Controller\\AdminController::exportDashboardReport'], null, null, null, false, false, null]],
        '/api/weather/current' => [[['_route' => 'api_weather_current', '_controller' => 'App\\Controller\\Api\\WeatherController::getCurrentWeather'], null, null, null, false, false, null]],
        '/api/weather/forecast' => [[['_route' => 'api_weather_forecast', '_controller' => 'App\\Controller\\Api\\WeatherController::getWeatherForecast'], null, null, null, false, false, null]],
        '/api/weather/seasonal-products' => [[['_route' => 'api_weather_seasonal_products', '_controller' => 'App\\Controller\\Api\\WeatherController::getSeasonalProducts'], null, null, null, false, false, null]],
        '/notifications/weather-alert' => [[['_route' => 'app_notifications_weather_alert', '_controller' => 'App\\Controller\\NotificationController::weatherAlert'], null, null, null, false, false, null]],
        '/notifications/seasonal-products-alert' => [[['_route' => 'app_notifications_seasonal_products_alert', '_controller' => 'App\\Controller\\NotificationController::seasonalProductsAlert'], null, null, null, false, false, null]],
        '/notifications/subscribe' => [[['_route' => 'app_notifications_subscribe', '_controller' => 'App\\Controller\\NotificationController::subscribe'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_temp_index', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/temp/shop' => [[['_route' => 'app_temp_shop', '_controller' => 'App\\Controller\\PageController::shop'], null, null, null, false, false, null]],
        '/testimonial' => [[['_route' => 'app_testimonial', '_controller' => 'App\\Controller\\PageController::testimonial'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'app_404', '_controller' => 'App\\Controller\\PageController::error'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PageController::contact'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|export/pdf/([^/]++)(*:231)'
                    .'|product(?'
                        .'|/(?'
                            .'|edit/([^/]++)(*:266)'
                            .'|delete/([^/]++)(*:289)'
                        .')'
                        .'|\\-type/(?'
                            .'|edit/([^/]++)(*:321)'
                            .'|delete/([^/]++)(*:344)'
                        .')'
                    .')'
                    .'|stock/(?'
                        .'|edit/([^/]++)(*:376)'
                        .'|delete/([^/]++)(*:399)'
                    .')'
                .')'
                .'|/shop/([^/]++)(*:423)'
                .'|/product/qr/([^/]++)(*:451)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        231 => [[['_route' => 'admin_export_pdf', '_controller' => 'App\\Controller\\AdminController::exportPDF'], ['type'], null, null, false, true, null]],
        266 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\AdminController::editProduct'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\AdminController::deleteProduct'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'admin_product_type_edit', '_controller' => 'App\\Controller\\AdminController::editProductType'], ['id'], null, null, false, true, null]],
        344 => [[['_route' => 'admin_product_type_delete', '_controller' => 'App\\Controller\\AdminController::deleteProductType'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'admin_stock_edit', '_controller' => 'App\\Controller\\AdminController::editStock'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'admin_stock_delete', '_controller' => 'App\\Controller\\AdminController::deleteStock'], ['id'], null, null, false, true, null]],
        423 => [[['_route' => 'app_temp_shop_detail', '_controller' => 'App\\Controller\\PageController::shopDetail'], ['id'], null, null, false, true, null]],
        451 => [
            [['_route' => 'app_product_qr', '_controller' => 'App\\Controller\\PageController::productQR'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
