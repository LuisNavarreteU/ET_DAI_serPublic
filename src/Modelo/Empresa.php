<?php
namespace Modelo;

/**
 * 
 */
class Empresa extends Contacto
{
	protected $database;

	public function __construct($container)
	{
		$this->database = $container->database;
	}

	public function Dato(){
		$arr = $this->database->select('empresa', ['codEm','rutEm', 'nomEm', 'contraseñaEm', 'direccionEm']);
		return $arr;
	}

	public function Agregar($rut,$nom,$corr,$tel,$codE,$rutE,$nomE,$conE,$dirE){
		parent::AgregarC($rut,$nom,$corr,$tel,$codE);
		$arr = $this->database->insert('empresa',[
			'rutEm' => 'rutE', 
			'nomEm' => 'nomE', 
			'contraseñaEm' => 'conE', 
			'direccionEm' => 'dirE'],
			['codEm' => $codE
		]);
	}

	public function loggin($rutE,$conE){
		
	}



}