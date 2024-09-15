<?php

use services\Route;
use controllers\LandingController;

Route::addRoute("GET", "/", [LandingController::class, "index"]);


Route::run();
