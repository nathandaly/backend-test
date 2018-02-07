<?php

require_once __DIR__.'/../vendor/autoload.php';

use SamKnows\Library\Bootstrap;

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

try {
    require_once __DIR__ . '/../app/library/Bootstrap.php';

    /**
     * We don't want a global scope variable for this
     */
    return (new Bootstrap())->run();
} catch (\Exception $e) {
    if (false !== getenv('APP_MODE') && 'prod' !== getenv('APP_MODE')) {
        var_dump($e);
        exit;
    }
}