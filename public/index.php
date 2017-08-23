<?php

  // kick off the session
  session_start();

  // Set our timezone
  date_default_timezone_set('Africa/Johannesburg');

  // global contants
  define("APP_ROOT", "/Micron");
  define("SITE_ROOT", "/Micron/public");
  define("DB_HOST", "mysql");
  define("DB_DATABASE", "Micron");
  define("DB_USERNAME", "root");
  define("DB_PASSWORD", "root");

  // Autoload all of the composer & custom classes
  require "../vendor/autoload.php";

  // App utillities
  require "app/Database.php";
  require "app/Routes.php";
  require "app/Controller.php";
  require "app/Auth.php";

  // Models
  require "models/Page.php";
  require "models/User.php";

  // Controllers
  require "controllers/PageController.php";
  require "controllers/UserController.php";
  require "controllers/LoginController.php";

  use App\Routes as Routes;
  use App\Auth as Auth;

  // Page Routes
  Routes::set("page/index", "PageController@index");
  Routes::set("page/add", "PageController@add");
  Routes::set("page/add-action", "PageController@addAction");
  Routes::set("page/{id}/detail", "PageController@detail");
  Routes::set("page/{id}/update", "PageController@update");
  Routes::set("page/{id}/delete", "PageController@delete");

  // App routes
  Routes::set("", "LoginController@login");
  Routes::set("login", "LoginController@login");
  Routes::set("login-action", "LoginController@loginAction");
  Routes::set("logout", "LoginController@logout");

  // User routes
  Routes::set("user/index", "UserController@index");
  Routes::set("user/add", "UserController@add");
  Routes::set("user/add-action", "UserController@addAction");
  Routes::set("user/{id}/detail", "UserController@detail");
  Routes::set("user/{id}/update", "UserController@update");
  Routes::set("user/{id}/delete", "UserController@delete");

  // Filter authentication
  Auth::filter(['user','page']);

?>
