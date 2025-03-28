<?php
session_start();



require_once ('../core/BaseController.php');
require_once '../core/Router.php';
require_once '../core/Route.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/AdminController.php';
require_once '../app/controllers/AnnonceController.php';
require_once '../app/controllers/DetailsController.php';
require_once '../app/controllers/MatchingController.php';

require_once '../app/config/db.php';



$router = new Router();
Route::setRouter($router);



// Define routes
// auth routes 
Route::get('/register', [AuthController::class, 'showRegister']);
Route::get('/verify/{id}', [AuthController::class, 'showVerify']);
Route::post('/verify/{id}', [AuthController::class, 'handleVerify']);
Route::get('/', [HomeController::class, 'ShowHome']);
Route::get('/profile', [HomeController::class, 'showProfile']);
Route::post('/register', [AuthController::class, 'handleRegister']);
Route::get('/login', [AuthController::class, 'showleLogin']);
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);



Route::get('/addAnnonce', [HomeController::class, 'showAddAnnonce']);

Route::get('/annonces', [HomeController::class, 'showAddAnnonce']);
Route::post('/annonces', [AnnonceController::class, 'addAnnonce']);

Route::get('/details', [DetailsController::class, 'Details']);
Route::post('/details', [DetailsController::class, 'addDetails']);


Route::get('/matching', [MatchingController::class, 'showMatchingResults']);


Route::get('/recherche', [AnnonceController::class, 'showAnnonces']); 
Route::get('/mesannonces', [AnnonceController::class, 'showMyAnnonces']); 
Route::get('/annonce/(\d+)', [AnnonceController::class, 'showAnnonceDetails']);
Route::post('/annonce/(\d+)', [AnnonceController::class, 'reportAnnonce']);
Route::post('/deleteAnnonce', [AnnonceController::class, 'deleteAnnonce']);



// admin routers

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/reports', [AdminController::class, 'showReports']);
Route::get('/admin/reset_password', [AdminController::class, 'showForgotPassword']);
Route::post('/admin/reset_password', [AdminController::class, 'resetPassword']);
Route::post('/admin/ban-reporter', [AdminController::class, 'banUser']);
Route::post('/admin/ban-reported', [AdminController::class, 'banUser']);    
Route::post('/admin/delete-report', [AdminController::class, 'deleteReport']);



// end admin routes 

// client Routes 
// Route::get('/client/dashboard', [ClientController::class, 'index']);



// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);



