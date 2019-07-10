<?php
namespace Modelo;

/**
 * 
 */
class Contacto
{
	protected $database;

	public function __construct($container)
	{
		$this->database = $container->database;
	}

	public function Dato(){
		$arr = $this->database->select('contacto', ['rutC', 'nomCn', 'correoCn', 'telefono', 'codEm']);
		return $arr;
	}

	public function AgregarC($rut,$nom,$corr,$tel,$codE){
		$arr = $this->database->insert('contacto',[
			'rutC' => 'rut',
			'nomCn'=> 'nom',
			'correoCn' => 'corr',
			'telefono' => 'tel',
			'codEm' => 'codE'
		]);
	} 

	public function ModificarC($rut,$nom,$corr,$tel,$codE){
		$arr = $this->database->update('contacto',[
			'rutC' => 'rut',
			'nomCn'=> 'nom',
			'correoCn' => 'corr',
			'telefono' => 'tel'],
			['codEm' => $codE
		]);
		return $arr;
	}

	
}