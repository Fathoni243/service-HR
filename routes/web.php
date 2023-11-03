<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'departments'], function () use ($router) {
    $router->get('/', ['uses' => 'DepartmentController@getDepartments']);
    $router->delete('/{id}', ['uses' => 'DepartmentController@deleteDepartments']);
});

$router->group(['prefix' => 'hierarchies'], function () use ($router) {
    $router->get('/', ['uses' => 'HierarchyController@getHierarchies']);
    $router->delete('/{id}', ['uses' => 'HierarchyController@deleteHierarchies']);
});

$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/', ['uses' => 'UserController@getUsers']);
    $router->delete('/{id}', ['uses' => 'UserController@deleteUsers']);
});

