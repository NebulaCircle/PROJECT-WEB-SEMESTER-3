<?php

use controllers\DashboardController;
use services\Route;
use controllers\LandingController;
use controllers\PasienController;

Route::addRoute("GET", "/", [LandingController::class, "index"]);
Route::addRoute("GET", "/admin/dashboard", [DashboardController::class, "index"]);
Route::addRoute("GET", "/admin/pasien", [PasienController::class, "index"]);
Route::addRoute("GET", "/admin/pasien/create", [PasienController::class, "create"]);
Route::addRoute("GET", "/admin/pasien/:id", [PasienController::class, "edit"]);


Route::run();
