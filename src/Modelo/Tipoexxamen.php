<?php
namespace Modelo;

/**
 * 
 */
class ClassName extends AnotherClass
{
	protected $database;
	function __construct($conteiner)
	{
		 $this->database = $conteiner->database;
	}

	public function Dato(){
		$arr = $this->database->select('tipoanalisis',['codTi','nomTi']);
	}
}