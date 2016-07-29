<?php
/**
 * @file
 * SEC_User Table Seeder
 *
 * All DecimaAccounting code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Vendor\DecimaModule\Module\Seeders;

use DB;
use Vendor\DecimaModule\Module\Empleado;
use Vendor\DecimaModule\Module\ExperienciaLaboral;
use Vendor\DecimaModule\Module\Puesto;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder {

	public function run()
	{
		Puesto::create(array('nombre' => 'Programador Senior'));
		Puesto::create(array('nombre' => 'Programador Junior'));

		Empleado::create(array('nombre' => 'Diego', 'apellido' => 'Andino', 'edad' => 19, 'salario' => 300.20, 'descripcion'=>'Prueba de descripcíon', 'puesto_id'=>1));

		
		ExperienciaLaboral::create(array('cargo' => 'Analista programador', 'descripcion' => 'Prueba descripcion', 'fecha_ini' => '2016-01-01', 'fecha_fin' => '2016-03-30', 'empleado_id'=> 1));
		
		ExperienciaLaboral::create(array('cargo' => 'Beta Tester', 'descripcion' => 'Prueba descripcion 2', 'fecha_ini' => '2016-02-01', 'fecha_fin' => '2016-05-30', 'empleado_id'=> 1));

		}

}
