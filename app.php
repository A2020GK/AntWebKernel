<?php
use Antwk\Application;
use Antwk\Http\Request;
require_once __DIR__ . "/vendor/autoload.php";

$application = new Application();
if ($application->isWeb) {
    $request = Request::constructFromGlobals();
    $response = $application->run($request);
    $response->send();
} else {
    $application->runCLI();
}