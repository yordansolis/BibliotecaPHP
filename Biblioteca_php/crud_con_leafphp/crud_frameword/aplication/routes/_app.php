<?php

app()->get('/', 'ContactosController@index');

app()->get('/editar/{id}', 'ContactosController@editar');

app()->get('/crear', 'ContactosController@crear');

app()->post('/agregar', 'ContactosController@agregar');
app()->get('/eliminar/{id}', 'ContactosController@eliminar');




//actialicar
app()->post('/actualizar/{id}', 'ContactosController@actualizar');

//home
app()->get('/home', 'TestsController@home');






app()->get('/test', 'TestsController@test');
