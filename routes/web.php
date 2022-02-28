<?php

$router->get('/', [
    'as' => 'welcome', 'uses' => 'HomeController@index'
]);

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('book/random', ['as' => 'book_random', 'uses' => 'BookController@random']);
    $router->get('book/{id}', ['as' => 'book', 'uses' => 'BookController@book']);

    $router->get('author/random', ['as' => 'author_random', 'uses' => 'AuthorController@random']);
    $router->get('author/{id}', ['as' => 'author', 'uses' => 'AuthorController@author']);
});
