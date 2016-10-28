<?php
ob_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>Login - PGSSC</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="">
        <meta name="author" content="" />

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,800italic,400,600,800" type="text/css">
        <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css" />		
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css" />	
        <link rel="stylesheet" href="./js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.css" type="text/css" />	

        <link rel="stylesheet" href="./css/App.css" type="text/css" />
        <link rel="stylesheet" href="./css/Login.css" type="text/css" />

        <link rel="stylesheet" href="./css/custom.css" type="text/css" />

    </head>

    <body bgcolor="#C0C0C0">

        <div id="login-container">

            <div id="logo">
               
                    <img src="./img/logos/pgssc.png" alt="Logo" />
                </a>
            </div>

            <div id="login">

                <h2>PGSSC DashBoard</h2>

                <h4>Please Login To Get Access</h4>

                <form id="login-form" action="#" method="post" class="form">
                    <?php
                    if (Input::exists()) {
                        if (Token::check(Input::get("token"))) {
                            $validate = new Validate();
                            $validation = $validate->check($_POST, array(
                                'username' => array('required' => TRUE),
                                'password' => array('required' => TRUE)
                            ));
                            if ($validation->passed()) {
                                $username=Input::get("username");
								$password=Input::get("password");
                                //login user
                                $user = new User();
                                $login = $user->login($username,$password);
                                if ($login) {
                                    $_SESSION['pgsscadmin_username']=$username;
                                    $_SESSION['pgsscadmin_role']=DB::getInstance()->getName("pgssc_users",$username,"Role","User_Name");
//                                    echo $_SESSION['pgsscadmin_role'];
if($_SESSION['pgsscadmin_role']=='Research Coordinator'){
	 Redirect::to('index.php?page=dashboardcordinator');
}else if($_SESSION['pgsscadmin_role']=='Data Surveyor'){
	Redirect::to('index.php?page=dashboardsurveyor');
}else if($_SESSION['pgsscadmin_role']=='Administrator'){
	Redirect::to('index.php?page=dashboard');
}
                                   
                                } else {
                                    echo 'Sorry, Login was not successful';
                                }
                            } else {
                                foreach ($validation->errors()as $error) {
                                    echo "<font color='red'><h5 align='center'>" . $error . '</h5></font>';
                                }
                            }
                        }
                    }
                    ?>
                    <div class="form-group">
                        <label for="login-username">Username</label>
                        <input type="text"name="username" class="form-control" id="login-username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" name="password" class="form-control" id="login-password" placeholder="Password">
                    </div>
                    <input type="hidden" value="<?php echo Token::generate(); ?>" name="token"/>
                    <div class="form-group">

                        <button type="submit" id="login-btn" class="btn btn-primary btn-block">Login &nbsp; <i class="fa fa-play-circle"></i></button>

                    </div>
                </form>


                <a href="javascript:;" class="btn btn-default">Forgot Password?</a>

            </div> <!-- /#login -->

            <!--	<a href="javascript:;" id="signup-btn" class="btn btn-lg btn-block">
                            Create an Account
                    </a>-->


        </div> <!-- /#login-container -->

        <script src="./js/libs/jquery-1.9.1.min.js"></script>
        <script src="./js/libs/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="./js/libs/bootstrap.min.js"></script>

        <script src="./js/App.js"></script>

        <script src="./js/Login.js"></script>

    </body>
</html>
<?php
ob_flush();
?>