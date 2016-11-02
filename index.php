
<?php
//echo 'Display';
session_start();
require_once 'functions/functions.php';
include 'core/init.php';
//error_reporting(0);
$crypt = new Encryption();
//echo date("Y-m-d h:i:s");
// Current / default page
//$encoded_page = isset($_GET['page']) ? $_GET['page'] : $crypt->encode('login');
$encoded_page = isset($_GET['page']) ? $_GET['page'] : ('login');
//$page = $crypt->decode($encoded_page);
$page=$encoded_page;

switch ($page) {
    default:
        $page = "error";
        //check_login_status();
        include 'pages/error.php';
        break;

    case 'index':
        //check_login_status();
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;

    case 'login':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
	
	case 'hospital':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
     
    case 'hospitaldatasurveyor':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
	
	case 'instructionsdatasurveyor':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
	
	case 'instructionsdatasurveyor2':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
	
    case 'dashboard':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
        
	case 'dashboardsurveyor':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;	
	
	case 'navigationsurveyor':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
	
	case 'navigationcordinator':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
	
	case 'dashboardcordinator':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
	
    case 'users':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
   
    case 'usersdatasurveyors':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;

    case 'list_usersdatasurveyors':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
		
  case 'viewhospitals':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
	
  case 'viewhospitalscordinator':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;

  case 'hospitaledit':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;

  case 'hospitaleditsurveyor':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
		
  case 'pickhospital':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
		
  case 'hospitalassign':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
		
       
    case 'logout':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
        
    case 'slider':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
        
        
    case 'list_users':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
    
	case 'usersedit':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
        
	case 'editusersdatasurveyors':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;
    
	
    case 'set_featured':
        if (file_exists('pages/' . $page . '.php'))
            include 'pages/' . $page . '.php';
        break;

}
?>
