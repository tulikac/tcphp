<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post(?'
                    .'|(*:92)'
                .')'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/new(*:186)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/(\\d+)(*:282)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/(\\d+)/edit(*:383)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/admin/post/([^/]++)/delete(*:489)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog(*:573)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/rss\\.xml(*:666)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/page/([1-9]\\d*)(*:766)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/posts/([^/]++)(*:865)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/comment/([^/]++)/new(*:970)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/blog/search(*:1061)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/login(*:1147)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/logout(*:1234)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/edit(*:1327)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)/profile/change\\-password(*:1432)'
                .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt)?(*:1513)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        92 => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'admin_post_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
        ],
        186 => [[['_route' => 'admin_post_new', '_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [[['_route' => 'admin_post_show', '_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        383 => [[['_route' => 'admin_post_edit', '_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        489 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        573 => [[['_route' => 'blog_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        666 => [[['_route' => 'blog_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        766 => [[['_route' => 'blog_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
        865 => [[['_route' => 'blog_post', '_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        970 => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'], ['_locale', 'postSlug'], ['POST' => 0], null, false, false, null]],
        1061 => [[['_route' => 'blog_search', '_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1147 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1234 => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1327 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1432 => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1513 => [
            [['_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
