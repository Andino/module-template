<?php

/**
 * @file
 * Application Routes.
 *
 * All DecimaAccounting code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

/*
|--------------------------------------------------------------------------
| Package Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('middleware' => array('auth', 'check.first.time.access', 'check.access', 'csrf'), 'prefix' => 'module/setup'), function()
{
	// Route::controller('/initial-accounting-setup', 'Mgallegos\DecimaAccounting\Accounting\Controllers\SettingManager');
});

Route::group(array('middleware' => array('auth'), 'prefix' => 'Recurso-Humano'), function()
{
	Route::group(array('prefix' => '/Mantenimiento'), function()
	{
		Route::get('/Empleados/new', function()
		{
			return Redirect::to('/Recurso-Humano/Mantenimiento/Empleados')->with('newEmpleadoAction', true);
		});

		Route::get('/Empleados/edit', function()
		{
			return Redirect::to('/Recurso-Humano/Mantenimiento/Empleados')->with('editEmpleadoAction', true);
		});

		Route::get('/Empleados/delete', function()
		{
			return Redirect::to('/Recurso-Humano/Mantenimiento/Empleados')->with('deleteEmpleadoAction', true);
		});

		Route::group(array('middleware' => array('check.access', 'csrf')), function()
		{
			Route::controller('/Empleados', 'Vendor\DecimaModule\Module\Controllers\EmpleadoManager');
		});
	});
});
