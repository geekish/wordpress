<?php

use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\JsonResponseHandler;

$whoops = new Whoops\Run;
$handler = new PrettyPageHandler;
$whoops->pushHandler($handler);

if (Whoops\Util\Misc::isAjaxRequest()) {
    $whoops->pushHandler(new JsonResponseHandler);
}

$whoops->register();

/* Development */
define('SAVEQUERIES', true);
define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);
