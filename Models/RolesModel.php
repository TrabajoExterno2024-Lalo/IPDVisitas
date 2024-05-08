<?php

class RolesModel
{
	// Campos de la tabla Roles
	public $id_rol;
	public $nombre_rol;
	public $estado_rol;

	private $conexion;

	public function __construct()
	{
		// establecer conexion con la base de datos
		$this->conexion = new Conexion();
		$this->conexion = $this->conexion->conect();
	}

	public function listRoles()
	{
		// crear sentencia SQL
		$sql = $this->conexion->prepare("SELECT * FROM roles");
		// Ejecutar sentencia SQL
		$sql->execute();

		// Traer TODOS los datos de la sentencia SQL
		$data = $sql->fetchAll(PDO::FETCH_ASSOC);

		// retornar datos de la consulta
		return $data;

	}

}

