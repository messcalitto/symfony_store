<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/access_denied' => [[['_route' => 'app_access_denied', '_controller' => 'App\\Controller\\AccessDeniedController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart_list' => [[['_route' => 'app_cart_list', '_controller' => 'App\\Controller\\CartController::cart_list'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact_send' => [[['_route' => 'app_contact_send', '_controller' => 'App\\Controller\\ContactController::contact_send'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/shipping' => [[['_route' => 'app_shipping', '_controller' => 'App\\Controller\\OrderController::shipping'], null, null, null, false, false, null]],
        '/place_order' => [[['_route' => 'app_place_order', '_controller' => 'App\\Controller\\OrderController::place_order'], null, null, null, false, false, null]],
        '/orders' => [[['_route' => 'app_orders', '_controller' => 'App\\Controller\\OrderController::show_my_orders'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\RegistrationController::editUserProfile'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stripe' => [[['_route' => 'app_stripe', '_controller' => 'App\\Controller\\StripePaymentController::stripe'], null, null, null, false, false, null]],
        '/stripe_post' => [[['_route' => 'app_stripe_post', '_controller' => 'App\\Controller\\StripePaymentController::stripePost'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cart_(?'
                    .'|add/([^/]++)(*:28)'
                    .'|update/([^/]++)/([^/]++)(*:59)'
                    .'|remove/([^/]++)(*:81)'
                .')'
                .'|/product/([^/]++)(*:106)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_add_cart', '_controller' => 'App\\Controller\\CartController::add_cart'], ['id'], null, null, false, true, null]],
        59 => [[['_route' => 'app_cart_update', '_controller' => 'App\\Controller\\CartController::cart_update'], ['id', 'quantity'], null, null, false, true, null]],
        81 => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::cart_remove'], ['id'], null, null, false, true, null]],
        106 => [
            [['_route' => 'app_product_details', '_controller' => 'App\\Controller\\HomeController::showProduct'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
