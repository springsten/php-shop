<?php
require_once('Utils/Router.php');
require __DIR__ . '/vendor/autoload.php';
require_once("vendor/autoload.php"); // LADDA ALLA DEPENDENCIES FROM VENDOR

// Hur kan man strukturera klasser
// Hir kan man struktirera filer? Folders + subfolders
// NAMESPACES       

// LÄS IN ALLA  .env VARIABLER till $_ENV i PHP
//  :: en STATIC funktion
$dotenv = Dotenv\Dotenv::createImmutable("."); // . is  current folder for the PAGE
$dotenv->load();

// Pilar istf .
// \ istf .

// import * as dotenv from 'dotenv';
require_once(dirname(__FILE__) . "/Utils/Router.php");

$router = new Router();
$router->addRoute('/', function () {
  require_once __DIR__ . '/pages/index.php';
});
$router->addRoute('/admin', function () {
  require_once __DIR__ . '/pages/admin.php';
});
$router->addRoute('/edit', function () {
  require_once __DIR__ . '/pages/edit.php';
});
$router->addRoute('/category', function () {
  require_once __DIR__ . '/pages/category.php';
});
$router->addRoute('/new', function () {
  require_once __DIR__ . '/pages/new.php';
});
$router->addRoute('/delete', function () {
  require_once __DIR__ . '/pages/delete.php';
});
$router->addRoute('/user/login', function () {
  require_once(__DIR__ . '/Pages/users/login.php');
});
$router->addRoute('/user/logout', function () {
  require_once(__DIR__ . '/Pages/users/logout.php');
});

$router->dispatch();
?>