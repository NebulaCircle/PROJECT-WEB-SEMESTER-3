<?php

use services\Route;
use controllers\TestController;

Route::addRoute("GET", "/", [TestController::class, "index"]);


Route::run();
