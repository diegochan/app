<?php 
//index.php/?controller = usuarios&acction=editar&id=2;
//app/usuarios/editar/2
#echo $_GET['url'];


define("APP_FOLDER","app");
define("APP_URL","http://".$_SERVER['SERVER_NAME']."/PHP/".APP_FOLDER."/");
define("APP_URL_CSS", APP_URL."public/css/");
define("APP_URL_IMG", APP_URL."public/img/");
define("APP_URL_JS", APP_URL."public/js");

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)).DS);
define("APP_PATH", ROOT."aplication".DS);
define("LIB_PATH", ROOT."libs".DS);

require(APP_PATH."config.php");
require(LIB_PATH."PDO.php");
require(LIB_PATH."Authorization.php");
require(LIB_PATH."Password.php");
require(LIB_PATH."Validations.php");
require(APP_PATH."request.php");
require(APP_PATH."bootstrap.php");
require(APP_PATH."controller.php");
require(APP_PATH."model.php");
require(APP_PATH."view.php");



/*echo "<pre>";
print_r(get_required_files());*/

if (isset($_GET['url'])) {
	$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
	$url = explode("/", $url);
	$url = array_filter($url);
	$controller = array_shift($url);
	$action = array_shift($url);
	$args = $url;
}
if (!isset($controller)) {
	$controller = "pages";
}

if (!isset($action)) {
	$action = "index";
}

if (empty($args)) {
	$args = array(0 => NULL);
}

$path = ROOT."controllers".DS.$controller."controller.php";
$view = ROOT."views".DS.$controller.DS.$action.".php";
$header = ROOT."views".DS."layouts".DS."default".DS."header.phtml";
$footer = ROOT."views".DS."layouts".DS."default".DS."footer.phtml";

if ($action == "login") {
	$header = ROOT."views".DS."layouts".DS."login".DS."header.phtml";
	$footer = ROOT."views".DS."layouts".DS."login".DS."footer.phtml";
}else{
	Authorization::logged();
}

if (file_exists($path)) {
	include($path);
	$ob = new $controller;
	$ob->$action($args);
	if (file_exists($view)) {
		include($header);
		include($view);
		include($footer);
	}
	else{
		echo "La vista para la acción $action no existe";
	}
}else{
	echo "El controlador $controller no existe";
}

/*echo $controller;
echo "<br>";
echo $action;
echo "<br>";
print_r($args);
*/
?>