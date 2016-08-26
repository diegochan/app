<?php 

abstract class AppController
{
	protected $db;
	abstract public function index();

	public function __construct(){
		$connection = new DataBaseConfig();

		$this->db = new ClassPDO(
			$connection->default["drive"],
			$connection->default["host"],
			$connection->default["database"],
			$connection->default["username"],
			$connection->default["password"]
		);
	}
	public function set($name = null, $value = null){
		$GLOBALS[$name] = $value;
	}
	public function redirect($url = array()){
		$path = "";
		if ($url['controller']) {
			$path.= $url['controller'];
		}
		if ($url['action']) {
			$path .= "/".$url['action'];
		}
		header("LOCATION: ".APP_URL.$path);
	}
}

?>