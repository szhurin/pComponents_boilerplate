<?php
define('site_path', __DIR__ . '/');
define('site_host', '/');
define('site_host_full', 'http://' . $_SERVER['SERVER_NAME']);
define('root_path', realpath(__DIR__ . '/../') . '/');

set_include_path(root_path . 'src/models:'.root_path . 'src');


