<?php
ini_set('display errors', 1);

	include __DIR__ . '/../inc/_all.php';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_SERVER['HTTP_METHOD']) ? $_REQUEST['HTTP_METHOD'] : 'GET';
$view = null;
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';


switch ($action . '_' . $method) {
	case 'create_GET':
		include __DIR__ . '/../Views/food/edit.php';
		break;
	case 'create_POST':
		
		break;
	case 'update_GET':
		include __DIR__ . '/../Views/food/edit.php';
		break;
	case 'update_POST':
		
		break;
	case 'delete_GET':
		
		break;
	case 'delete_GET':
		
		break;
	case 'index_GET':
	default:
		include __DIR__ . '/../Views/food/index.php';
		break;
}

