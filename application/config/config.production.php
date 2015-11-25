<?php

declare(strict_types=1);

// error reporting
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "syslog");

ini_set('session.cookie_httponly', 1);

return array(
    'URL' => 'http://192.168.0.101/', /// TODO: change to get dynamically
    'PATH_CONTROLLER' => realpath(dirname(__FILE__) . '/../../') . '/application/controller/',
    'PATH_VIEW' => realpath(dirname(__FILE__) . '/../../') . '/application/view/',
    'DEFAULT_CONTROLLER' => 'index',
    'DEFAULT_ACTION' => 'index',

    // database settings
    'DB_TYPE' => 'mysql',
    'DB_HOST' => '127.0.0.1',   /// TODO: check DB_HOST for production env
    'DB_NAME' => 'ConfScheduler',
    'DB_USER' => 'root',
    'DB_PASS' => '',
    'DB_PORT' => '3306',
    'DB_CHARSET' => 'utf8',

    // cookie settings
    'COOKIE_RUNTIME' => 1209600, // 2 weeks
    'COOKIE_PATH' => '/',
    'COOKIE_DOMAIN' => "",
    'COOKIE_SECURE' => false, ///TODO: true for production?
    'COOKIE_HTTP' => true,
    'SESSION_RUNTIME' => 604800, // 1 week
);