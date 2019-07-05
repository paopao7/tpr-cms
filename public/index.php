<?php

namespace tpr;

require_once __DIR__ . '/../init.php';

Path::app(Path::dir([
    dirname(__DIR__),
    "application",
    "api"
]));

App::setAppOption("namespace", "App\\api\\");
App::run(true);