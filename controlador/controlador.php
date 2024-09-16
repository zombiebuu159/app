<?php
require_once __dir__.'/../modelo/obtenerdatos.php';
class controlador {
	public static $rutaAPP="/sistema.web/";
	public function iniciar_sesion() {
		if (!isset($_SESSION)) {
			session_start();
		}
		if (isset($_SESSION["id_usuario"])) {
			return true;
		}
		return false;
	}

	//USUARIOS
	public function home() {
		include_once(__dir__."/../vistas/dashboard/dashboard.php");
	}

	//INICIO DE SESION
	public function login() {
		include_once(__dir__."/../vistas/login/login.php");
	}
	public function validar() {
		include_once(__dir__."/../vistas/login/php/validarlogin.php");
	}
	//FIN INICIO DE SESION

	//FUNCION AL CERRAR SESION
	function cerrar_sesion()
	{
		if(!isset($_SESSION)){
			session_start();
		}
		session_destroy();
		header('Location: '.controlador::$rutaAPP.'index.php/login');
	}

	public function index() {
		include_once(__dir__."/../vistas/login/login.php");
	}
}
?>