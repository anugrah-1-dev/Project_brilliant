<?php

$remote_addr = isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
    ? explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0] 
    : $_SERVER['REMOTE_ADDR'];
$blocked_ips_file = __DIR__ . '/blocked_ips.txt';
if (file_exists($blocked_ips_file)) {
    $blocked_ips = file($blocked_ips_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (in_array($remote_addr, $blocked_ips)) {
        header('HTTP/1.1 403 Forbidden');

        echo "<h1>403 Forbidden</h1>";
        echo "Access Denied: Your IP ($remote_addr) has been restricted by Brilliant Security.";
        exit();
    }
}

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

// --- BRILLIANT DASHBOARD CUSTOM TRAFFIC LOGGER [ADVANCED V2] ---
$brilliant_start_time = microtime(true);
register_shutdown_function(function() use ($brilliant_start_time) {
    $time_taken_ms = max(1, round((microtime(true) - $brilliant_start_time) * 1000));
    $status = http_response_code() ?: 200;
    
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '-';
    $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '-';
    $remote_addr = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0] : $_SERVER['REMOTE_ADDR'];
    
    $log_entry = $remote_addr . " - - [" . date('d/M/Y:H:i:s O') . "] \"" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " " . $_SERVER['SERVER_PROTOCOL'] . "\" " . $status . " 0 \"" . $referer . "\" \"" . $user_agent . "\" " . $time_taken_ms . "\n";
    
    file_put_contents(__DIR__ . '/traffic.log', $log_entry, FILE_APPEND);
});
// ----------------------------------------------------------------

// ------------------------------------------------------------

// -------------------------------------------------

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
