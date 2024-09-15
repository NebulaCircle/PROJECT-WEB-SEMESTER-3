<?php

use services\Route;
use controllers\TestController;

Route::addRoute("GET", "/test/:id", [TestController::class, "index"]);


Route::run();
