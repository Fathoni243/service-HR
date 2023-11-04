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
    $router->post('/create', ['uses' => 'DepartmentController@createDepartment']);
    $router->delete('/{id}', ['uses' => 'DepartmentController@deleteDepartments']);
    $router->put('/{id}', ['uses' => 'DepartmentController@updateDepartments']);
});

$router->group(['prefix' => 'hierarchies'], function () use ($router) {
    $router->get('/', ['uses' => 'HierarchyController@getHierarchies']);
    $router->post('/create', ['uses' => 'HierarchyController@createHierarchy']);
    $router->delete('/{id}', ['uses' => 'HierarchyController@deleteHierarchies']);
    $router->put('/{id}', ['uses' => 'HierarchyController@updateHierarchies']);
});

$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/', ['uses' => 'UserController@getUsers']);
    $router->post('/create', ['uses' => 'UserController@createUser']);
    $router->delete('/{id}', ['uses' => 'UserController@deleteUsers']);
    $router->delete('/{id}', ['uses' => 'UserController@updateUsers']);
});

