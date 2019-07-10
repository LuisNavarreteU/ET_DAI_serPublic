<?php
namespace Modelo;

/**
 * 
 */
class Resultado
{
	protected $database;
	function __construct($container)
	{
		$this->database = $container->database;
	}

	public function Dato(){
		$arr = $this->database->select('resultado',['idTi','idAn','feReg','ppm','estadoRes','rutEmpl']);
		return $arr;
	}

	public function AgregarC($idT,$idA,$feR,$ppm,$esta,$rut){
		$arr = $this->database->insert('resultado',[
			'idTi' => 'idT',
			'idAn' => 'idA',
			'feReg' => 'feR',
			'ppm' => 'ppm',
			'estadoRes' => 'esta',
			'rutEmpl' => 'rut'
		]);
	} 

	public function ModificarC($idT,$idA,$feR,$ppm,$esta,$rut){
		$arr = $this->database->update('resultado',[
			'idTi' => 'idT',
			'feReg' => 'feR',
			'ppm' => 'ppm',
			'estadoRes' => 'esta',
			'rutEmpl' => 'rut'],
			['idAn' => $idA
		]);
		return $arr;
	}
}