<?

include_once __DIR__ . '/../inc/_all.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_POST['submit']) ? 'POST' : 'GET';
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view = null;


switch ($action . '_' . $method) {
	case 'create_GET':
			$model = Exercise::Blank();
			$view = "exercise/edit.php";
			break;
	case 'save_POST':
			$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';
			$errors = Exercise::Validate($_REQUEST);
			if(!$errors){
				$errors = Exercise::Validate($_REQUEST);
			}
			if(!$errors){
				header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				die();
			}else{
				my_print($errors);
				$model = $_REQUEST;
				$view = "exercise/edit.php";		
			}
			break;
	case 'delete':
			if($_SERVER['REQUEST_METHOD'] == 'GET'){
				//Promt
			}else{
				
			}
			break;
			break;
	case 'edit_GET':
			$model = Exercise::Get($_REQUEST['id']);
			$view = "exercise/edit.php";
			break; 
	case 'delete_GET':
			$model = Exercise::Get($_REQUEST['id']);
			$view = "exercise/delete.php";
			break;
	case 'delete_POST':
			$errors = Exercise::Delete($_REQUEST['id']);
			if($errors){
					$model = Exercise::Get($_REQUEST['id']);
					$view = "exercise/delete.php";
			}else{
					header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
					die();			
			}
				
			break;
	case 'index_GET':
	default:
			$model = Exercise::Get();
			$view = "exercise/index.php";
			break;
			
}

switch ($format) {
	case 'json':
			echo json_encode($model);
			break;
	case 'plain':
			include __DIR__ . "/../views/$view";
			break;
	case 'web':
	default:
			include __DIR__ . "/../views/shared/_Template.php";
			break;
		
}