<?php

defined('BASEPATH') or exit('No direct script access allowed');

$active_group  = 'default';
$query_builder = true;

$db['default'] = [
    'dsn'          => '',
    'hostname'     => '127.0.0.1',
    'username'     => 'root',
    'password'     => 'root',
    'database'     => 'cms',
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => false,
    'db_debug'     => (ENVIRONMENT !== 'production'),
    'cache_on'     => false,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => false,
    'compress'     => false,
    'stricton'     => false,
    'failover'     => array(),
    'save_queries' => true
];

$db['auth'] = [
    'dsn'          => '',
    'hostname'     => '127.0.0.1',
    'username'     => 'root',
    'password'     => 'root',
    'database'     => 'realmd',
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => false,
    'db_debug'     => (ENVIRONMENT !== 'production'),
    'cache_on'     => false,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => false,
    'compress'     => false,
    'stricton'     => false,
    'failover'     => array(),
    'save_queries' => true
];

$db['world'] = [
    'dsn'          => '',
    'hostname'     => '127.0.0.1',
    'username'     => 'root',
    'password'     => 'root',
    'database'     => 'mangos',
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => false,
    'db_debug'     => (ENVIRONMENT !== 'production'),
    'cache_on'     => false,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => false,
    'compress'     => false,
    'stricton'     => false,
    'failover'     => array(),
    'save_queries' => true
];
