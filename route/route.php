<?php

use controllers\DashboardController;
use services\Route;
use controllers\LandingController;
use controllers\PasienController;
use controllers\logiNconTroller;

Route::addRoute("GET", "/", [LandingController::class, "index"]);
Route::addRoute("GET", "/admin/dashboard", [DashboardController::class, "index"]);
Route::addRoute("GET", "/admin/pasien", [PasienController::class, "index"]);
Route::addRoute("GET", "/admin/pasien/create", [PasienController::class, "create"]);
Route::addRoute("GET", "/admin/pasien/:id", [PasienController::class, "edit"]);
Route::addRoute("GET", "/auth/login", [logiNconTroller::class, "index"]);
Route::addRoute("POST", "/auth/login", [logiNconTroller::class, "authentic"]);


Route::run();
