<?php

Route::get('abuot', function ()
{
	return View::make('about');
});

Route::get('report', function ()
{
	return View::make('report');
});