<?php
namespace Modelo;

/**
 * 
 */
class Empleado
{
	protected $database;
	public function __construct($container)
	{
		$this->database = $container->database;
	}

	public function Dato(){
		$arr = $this->database->select('empleado',['rutEmpl','nomEmpl','contraseñaEmpl','categoriaEmpl']);
		return $arr;
	}

	public function AgregarC($rut,$nom,$con,$cat){
		$arr = $this->database->insert('empleado',[
			'rutEmpl' => 'rut',
			'nomEmpl' => 'nom',
			'contraseñaEmpl' => 'con',
			'categoriaEmpl' => 'cat'
		]);
	} 

	public function ModificarC($rut,$nom,$con,$cat){
		$arr = $this->database->update('empleado',[
			'nomEmpl' => 'nom',
			'contraseñaEmpl' => 'con',
			'categoriaEmpl' => 'cat'],
			['rutEmpl' => $rut
		]);

		return $arr;
	}
}