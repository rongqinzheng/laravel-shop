<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->get('users', 'UsersController@index');
    $router->get('product', 'ProductsController@index');
    $router->post('product/create', 'ProductsController@create');
    $router->post('product', 'ProductsController@store');
    $router->get('product/{id}/edit', 'ProductsController@edit');
    $router->put('product/{id}', 'ProductsController@update');
});
