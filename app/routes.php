<?php

$route[] = ['/login', 'UserController@login'];
$route[] = ['/login/auth', 'UserController@auth'];
$route[] = ['/logout', 'UserController@logout'];

$route[] = ['/user/create', 'UserController@create'];
$route[] = ['/user/store', 'UserController@store'];
$route[] = ['/user/{id}/edit', 'UserController@edit'];
$route[] = ['/user/{id}/update', 'UserController@update'];

$route[] = ['/', 'HomeController@index'];

/* Protected route */
$route[] = ['/home', 'HomeController@home', 'auth'];


return $route;