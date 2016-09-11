<?php

Route::get('about', function ()
{
	return View::make('about');
});

Route::get('report', function ()
{
	return View::make('report');
});

Route::resource('lessons', 'LessonsController');