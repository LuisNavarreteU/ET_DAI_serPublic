<?php
namespace Modelo;

/**
 * 
 */
class Particular
{
	protected $database;
	public function __construct($conteiner)
	{
		$this->database = $conteiner->database;
	}

	public function Dato(){
		$arr = $this->database->select('particular', ['codPa', 'rutPa', 'contraseñaPa', 'nomPa', 'direccionPa', 'correoPa']);
		return $arr;
	}

	public function AgregarPa($cod,$rut,$con,$nom,$dire,$corre){
		$arr = $this->database->insert('particular', [
			'codPa' => 'cod',
			 'rutPa' => 'rut', 
			 'contraseñaPa' => 'con', 
			 'nomPa' => 'nom', 
			 'direccionPa' => 'dire', 
			 'correoPa' => 'corre'
			]);
	} 

	public function ModificarPa($cod,$rut,$con,$nom,$dire,$corre){
		$arr = $this->database->update('particular', [
			'rutPa' => 'rut', 
			'contraseñaPa' => 'con', 
			'nomPa' => 'nom', 
			'direccionPa' => 'dire', 
			'correoPa' => 'corre'],
			['codPa' => $cod
		]);
			return $arr;
		}

}
