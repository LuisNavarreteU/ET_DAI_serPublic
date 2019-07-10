<?php
namespace Modelo;

/**
 * 
 */
class Muestra
{
	protected $databese;
	function __construct($container)
	{
		$this->database = $container->database;
	}

	public function Dato(){
		$arr = $this->databese->select('muestra',['codMu','feRecep','temperatura','cantMu','idEm','idPa','rutRe']);
		return $arr;
	}

	public function AgregarMu($cod,$fre,$tem,$cant,$idE,$idP,$rut){
		$arr = $this->database->insert('muestra',[
			'codMu' => 'cod',
			'feRecep' => 'fre',
			'temperatura' => 'tem',
			'cantMu' => 'cant',
			'idEm' => 'idE',
			'idPa' => 'idP',
			'rutRe' => 'rut'
		]);
	} 

	public function ModificarMu($cod,$fre,$tem,$cant,$idE,$idP,$rut){
		$arr = $this->database->update('muestra',[
			'feRecep' => 'fre',
			'temperatura' => 'tem',
			'cantMu' => 'cant',
			'idEm' => 'idE',
			'idPa' => 'idP',
			'rutRe' => 'rut'],
			['codMu' => $cod
		]);
		return $arr;
	}
}