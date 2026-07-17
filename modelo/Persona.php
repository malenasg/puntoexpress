<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Persona
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertarc($tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email,$condicion)
	{
		$sql="INSERT INTO persona (tipo_persona,nombre,tipo_documento,num_documento,direccion,telefono,email,condicion)
		VALUES ('$tipo_persona','$nombre','$tipo_documento','$num_documento','$direccion','$telefono','$email','1')";
		return ejecutarConsulta($sql);
	}

	public function insertare($nombre, $apellido, $cuit, $direccion, $telefono, $email, $cargo, $fecha_ingreso)
	{
		$sql = "INSERT INTO persona 
		(tipo_persona, nombre, apellido, cuit, direccion, telefono, email, cargo, fecha_ingreso, condicion)
		VALUES 
		('Empleado', '$nombre', '$apellido', '$cuit', '$direccion', '$telefono', '$email', '$cargo', '$fecha_ingreso', '1')";

		return ejecutarConsulta($sql);
	}

	public function insertarp($razon_social, $cuit, $direccion, $telefono, $email)
	{
		$sql = "INSERT INTO persona 
		(tipo_persona, nombre, razon_social, cuit, direccion, telefono, email, condicion)
		VALUES 
		('Proveedor', '$razon_social', '$razon_social', '$cuit', '$direccion', '$telefono', '$email', '1')";
		return ejecutarConsulta($sql);
	}


	//Implementamos un método para editar registros
	public function editarc($idpersona,$tipo_persona,$nombre,$cuit,$direccion,$telefono,$email,$condicion)
	{
		$sql="UPDATE persona SET tipo_persona='$tipo_persona',nombre='$nombre',cuit='$cuit',direccion='$direccion',telefono='$telefono',email='$email', condicion='1' WHERE idpersona='$idpersona'";
		return ejecutarConsulta($sql);
	}

	public function editare($idpersona, $nombre, $apellido, $cuit, $direccion, $telefono, $email, $cargo, $fecha_ingreso)
	{
		$sql = "UPDATE persona SET 
		nombre='$nombre',
		apellido='$apellido',
		cuit='$cuit',
		direccion='$direccion',
		telefono='$telefono',
		email='$email',
		cargo='$cargo',
		fecha_ingreso='$fecha_ingreso',
		direccion='$direccion',
		telefono='$telefono',
		email='$email',
		cargo='$cargo',
		fecha_ingreso='$fecha_ingreso'
		WHERE idpersona='$idpersona'";

		return ejecutarConsulta($sql);
	}

		public function editarp($idpersona, $razon_social, $cuit, $direccion, $telefono, $email)
	{
		$sql = "UPDATE persona SET 
		nombre='$razon_social',
		razon_social='$razon_social',
		cuit='$cuit',
		direccion='$direccion',
		telefono='$telefono',
		email='$email'
		WHERE idpersona='$idpersona'";
		
		return ejecutarConsulta($sql);
	}
	//Implementamos un método para desactivar categorías
	public function desactivar($idpersona)
	{
		$sql="UPDATE persona SET condicion='0' WHERE idpersona='$idpersona'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idpersona)
	{
		$sql="UPDATE persona SET condicion='1' WHERE idpersona='$idpersona'";
		return ejecutarConsulta($sql);
	}


	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idpersona)
	{
		$sql="SELECT * FROM persona WHERE idpersona='$idpersona'";
		return ejecutarConsultaSimpleFila($sql);
	}

    	//Implementar un método para listar los clientes
	public function listarc()
	{
		$sql="SELECT * FROM persona WHERE tipo_persona='Cliente'";
		return ejecutarConsulta($sql);		
	}

		//Implementar un método para listar los empleados
	public function listare()
	{
		$sql="SELECT * FROM persona WHERE tipo_persona='Empleado'";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los proveedores
	public function listarp()
	{
		$sql="SELECT * FROM persona WHERE tipo_persona='Proveedor'";
		return ejecutarConsulta($sql);		
	}
}

?>