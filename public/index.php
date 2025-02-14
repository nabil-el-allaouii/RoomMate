<?php
session_start();



require_once ('../core/BaseController.php');
require_once '../core/Router.php';
require_once '../core/Route.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/AdminController.php';
require_once '../app/controllers/AnnonceController.php';
require_once '../app/config/db.php';



$router = new Router();
Route::setRouter($router);



// Define routes
// auth routes 
Route::get('/register', [AuthController::class, 'showRegister']);
Route::get('/', [HomeController::class, 'ShowHome']);
Route::get('/profile', [HomeController::class, 'showProfile']);
Route::post('/register', [AuthController::class, 'handleRegister']);
Route::get('/login', [AuthController::class, 'showleLogin']);
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::post('/logout', [AuthController::class, 'logout']);



Route::get('/addAnnonce', [HomeController::class, 'showAddAnnonce']);

Route::get('/annonces', [HomeController::class, 'showAddAnnonce']);

Route::post('/annonces', [AnnonceController::class, 'addAnnonce']);

Route::get('/chat', [HomeController::class, 'showChat']);
Route::post('/sendMessage', [ChatController::class, 'sendMessage']);
Route::get('/getMessages', [ChatController::class, 'getMessages']);
Route::get('/getConversations', [ChatController::class, 'getConversations']);

Route::get('/recherche', [AnnonceController::class, 'showAnnonces']); 
Route::get('/mesannonces', [AnnonceController::class, 'showMyAnnonces']); 
Route::post('/deleteAnnonce', [AnnonceController::class, 'deleteAnnonce']); 



// admin routers

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/users', [AdminController::class, 'handleUsers']);
Route::get('/admin/categories', [AdminController::class, 'categories']);
Route::get('/admin/testimonials', [AdminController::class, 'testimonials']);
Route::get('/admin/projects', [AdminController::class, 'projects']);



// end admin routes 

// client Routes 
// Route::get('/client/dashboard', [ClientController::class, 'index']);



// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);



