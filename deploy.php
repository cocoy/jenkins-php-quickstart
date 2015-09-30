<?php
require(__DIR__ . "/vendor/autoload.php");

use GitHubWebhook\Handler;

$handler = new Handler("OuchPain", __DIR__);
if($handler->handle()) {
    echo "OK";
} else {
    echo "Wrong secret";
}
