<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('categories', CategoriesController::class);
    $router->resource('cities', CitiesController::class);
    $router->resource('customers', CustomersController::class);
    $router->resource('groupings', GroupingsController::class);
    $router->resource('macrocategories', MacrocategoriesController::class);
    $router->resource('nations', NationsController::class);
    $router->resource('paymentmethods', PaymentmethodsController::class);
    $router->resource('provinces', ProvincesController::class);
    $router->resource('quotes', QuotesController::class);
    $router->resource('quotes-details', QuotesDetailsController::class);
    $router->resource('regions', RegionsDetailsController::class);

});
