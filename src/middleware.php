<?php

use Slim\Request;
use Slim\Response;

$app->addRoutingMiddleware();

$app->addErrorMiddleware(true, false, false);
