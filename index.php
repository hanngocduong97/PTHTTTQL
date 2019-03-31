<?php 
	if (isset($_GET['mod'])) {
		$mod=$_GET['mod'];
	}else{
		$mod='home';
	}
	if (isset($_GET['act'])) {
		$act=$_GET['act'];
	} else {
		$act='list';
	}
	switch ($mod) {
		case 'home':
			include_once('controllers/HomeController.php');
			$home= new HomeController();
			switch ($act) {
				case 'home':
					$home->home();
					break;
				case 'listtop':
					$home->listtop();
					break;
				case 'signin':
					$home->signin();
					break;
				case 'detail':
					$home->detail();
					break;
				case 'find':
					$home->find();
					break;
				case 'forget':
					$home->forget();
					break;
				case 'loginform':
					$home->loginform();
					break;
				case 'login':
					$home->login();
					break;
				case 'sendemail':
					$home->sendemail();
					break;
				case 'signup':
					$home->signup();
					break;
				case 'logout':
					$home->logout();
					break;
				default:
					$home->home();
					break;
			}
			break;
		case 'user':
			include_once('models/Admin.php');
			include_once('controllers/UserController.php');
			$user = new UserController();
			switch ($act) {
				
				default:
					$user->list();
					break;
			}
			break;
		
		case 'category':
			include_once('models/Admin.php');
			include_once('controllers/CategoryController.php');
			$category = new CategoryController();
			switch ($act) {
				
				default:
					$category->list();
					break;
			}
			break;
		default:
			$mod='home';
			break;
	}
?>