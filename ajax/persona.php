<?php 
require_once "../modelo/Persona.php";

$persona=new Persona();

$idpersona=isset($_POST["idpersona"])? limpiarCadena($_POST["idpersona"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$apellido=isset($_POST["apellido"])? limpiarCadena($_POST["apellido"]):"";
$razon_social=isset($_POST["razon_social"])? limpiarCadena($_POST["razon_social"]):"";
$cuit=isset($_POST["cuit"])? limpiarCadena($_POST["cuit"]):"";
$tipo_documento=isset($_POST["tipo_documento"])? limpiarCadena($_POST["tipo_documento"]):"";
$num_documento=isset($_POST["num_documento"])? limpiarCadena($_POST["num_documento"]):"";
$cargo=isset($_POST["cargo"])? limpiarCadena($_POST["cargo"]):"";
$fecha_ingreso=isset($_POST["fecha_ingreso"])? limpiarCadena($_POST["fecha_ingreso"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
$condicion=isset($_POST["condicion"])? limpiarCadena($_POST["condicion"]):"";
$tipo_persona=isset($_POST["tipo_persona"])? limpiarCadena($_POST["tipo_persona"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':

		if ($tipo_persona == "Proveedor") {
			if (empty($idpersona)) {
				$rspta=$persona->insertarp($razon_social,$cuit,$direccion,$telefono,$email);
				echo $rspta ? "Proveedor registrado" : "Proveedor no se pudo registrar";
			} else {
				$rspta=$persona->editarp($idpersona,$razon_social,$cuit,$direccion,$telefono,$email);
				echo $rspta ? "Proveedor actualizado" : "Proveedor no se pudo actualizar";
			}
		}
		else if ($tipo_persona == "Empleado") {
			if (empty($idpersona)) {
				$rspta=$persona->insertare($nombre,$apellido,$tipo_documento,$num_documento,$direccion,$telefono,$email,$cargo,$fecha_ingreso);
				echo $rspta ? "Empleado registrado" : "Empleado no se pudo registrar";
			} else {
				$rspta=$persona->editare($idpersona,$nombre,$apellido,$tipo_documento,$num_documento,$direccion,$telefono,$email,$cargo,$fecha_ingreso);
				echo $rspta ? "Empleado actualizado" : "Empleado no se pudo actualizar";
			}
		}
		else {
			if (empty($idpersona)){
				$rspta=$persona->insertarc($tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email,$condicion);
				echo $rspta ? "Cliente registrado" : "Cliente no se pudo registrar";
			} else {
				$rspta=$persona->editarc($idpersona,$tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email,$condicion);
				echo $rspta ? "Cliente actualizado" : "Cliente no se pudo actualizar";
			}
		}

	break;

	case 'desactivar':
		$rspta=$persona->desactivar($idpersona);
		if ($tipo_persona == "Proveedor") {
			echo $rspta ? "Proveedor Desactivado" : "Proveedor no se puede desactivar";
		} else if ($tipo_persona == "Empleado") {
 		echo $rspta ? "Empleado Desactivado" : "Empleado no se puede desactivar";
		} else {
			echo $rspta ? "Cliente Desactivado" : "Cliente no se puede desactivar";}
 		break;
	break;

	case 'activar':
		$rspta=$persona->activar($idpersona);
		if ($tipo_persona == "Proveedor") {
			echo $rspta ? "Proveedor activado" : "Proveedor no se puede activar";
		} else if ($tipo_persona == "Empleado") {
			echo $rspta ? "Empleado activado" : "Empleado no se puede activar";
		} else {
			echo $rspta ? "Cliente activado" : "Cliente no se puede activar";
		}
 		break;
	break;

	case 'mostrar':
		$rspta=$persona->mostrar($idpersona);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listarc':
		$rspta=$persona->listarc();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idpersona.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idpersona.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idpersona.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idpersona.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombre,
				"2"=>$reg->num_documento,
				"3"=>$reg->telefono,
				"4"=>$reg->email,
				"5"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	case 'listare':
		$rspta=$persona->listare();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idpersona.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idpersona.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idpersona.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idpersona.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombre." ".$reg->apellido,
				"2"=>$reg->num_documento,
				"3"=>$reg->telefono,
				"4"=>$reg->email,
				"5"=>$reg->cargo,
				"6"=>$reg->fecha_ingreso,
				"7"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	case 'listarp':
		$rspta=$persona->listarp();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idpersona.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idpersona.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idpersona.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idpersona.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->razon_social,
				"2"=>$reg->cuit,
				"3"=>$reg->telefono,
				"4"=>$reg->email,
				"5"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
?>