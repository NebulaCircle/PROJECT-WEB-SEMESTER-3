<?php

use services\Route;
use controller\TestController;

Route::addRoute("GET", "/test/:id", [TestController::class, "index"]);


Route::run();
