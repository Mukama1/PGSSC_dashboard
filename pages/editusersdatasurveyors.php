<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php include 'includes/header.php'; ?>	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body {
	background-color: #F0F8FF;
}
    </style>
    </head>

<body>
        <div id="wrapper">

            <?php include 'includes/headeronecordinator.php'; ?>


            <div id="sidebar-wrapper" class="collapse sidebar-collapse">



                <?php
                include 'includes/navigationcordinator.php';
                ?>

            </div> <!-- /#sidebar-wrapper -->



            <div id="content">		

                <div id="content-header">
                    <h1>PGSSC Data Surveyors</h1>
                </div> <!-- #content-header -->	


                <div id="content-container">	
                    <div class="portlet">

                        <div class="portlet-header">

                            <h3>
                                <i class="fa fa-group"></i>
                                Edit Data Surveyor User Information
                          </h3>

                        </div> <!-- /.portlet-header -->

                        <div class="portlet-content">
                            <form action="#" method="post">
                                <?php
                                if (Input::exists()) {
                                    // echo Input::get('username');
                                    $validate = new Validate();
                                    $validation = $validate->check($_POST, array(
                                        'User_Name' => array(
                                            'required' => TRUE,
                                            'min' => 2
                                        ),
                                        'Password' => array(
                                            'required' => TRUE
                                        )
                                        ,
                                        'Email' => array(
                                            'required' => TRUE
                                        )
                                        ,
                                        'First_Name' => array(
                                            'required' => TRUE
                                        )
                                        ,
                                        'Last_Name' => array(
                                            'required' => TRUE
                                        )
										 ,
                                        'Role' => array(
                                            'required' => TRUE
                                        )
										,
                                        'Phone' => array(
                                            'required' => TRUE
                                        )
                                    ));
                                    if ($validation->passed()) {
                                        //login user
                                        $User_id = Input::get('User_id');
										$First_Name = Input::get('First_Name');
                                        $Last_Name = Input::get('Last_Name');
                                        $User_Name = Input::get('User_Name');
                                        $Password = Input::get('Password');
                                        $cpassword = Input::get('cpassword');
                                        $Email = Input::get('Email');
                                        $Role = Input::get('Role');
                                        $Phone = Input::get('Phone');
                                        $queryDup = "select * from pgssc_users where User_Name='$User_Name'";
                                        // if (DB::getInstance()->checkRows($queryDup)):
                                            // echo "<h5 align='center' ><font color='red'>User Already Registered.</font></h5>";
                                            // header("refresh:1;url=index.php?page=users");
                                            // exit();
                                           
                                        // endif;
										$userInsert = DB::getInstance()->update('pgssc_users', $User_id,array(
                                            'User_Name' => $User_Name,
                                            'Role' => $Role,
                                            'Password' => sha1($Password),
                                            'First_Name' => $First_Name,
                                            'Last_Name' => $Last_Name,
                                            'Email' => $Email,
                                            'Phone' => $Phone
                                        ), "User_id");
                                        if ($userInsert) {
                                            echo "<h5 align='center' ><strong><font color='green' size='2px'>User Details Have Been Updated Successfully</font></strong></h5>";
                                            header("refresh:2;url=index.php?page=list_users");
                                        }
                                    } else {
                                        //output errors
                                        foreach ($validation->errors() as $error) {
                                            echo "<h5 align='center' ><font color='red'>" . $error . '</font></h5>';
                                        }
                                    }
                                }
								
								$User_id=Input::get('id');
							
   
                                          $edituser= DB::getInstance()->query("SELECT * FROM pgssc_users where User_id=".$User_id);
                                                foreach ($edituser->results() as $edituser) {
                                                    $User_Name=$edituser->User_Name;
                                                    $Role=$edituser->Role;
													$Password=$edituser->Password;
                                                    $First_Name=$edituser->First_Name;
													$Last_Name=$edituser->Last_Name;
                                                    $Email=$edituser->Email;
													$Phone=$edituser->Phone;
                                                   
													
                                                }
                             
								
                                ?>
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
								<input type="hidden" id="User_id-input" value="<?php echo $User_id ?>" name="User_id" class="form-control">
                                        <div class="form-group">
                                            <label for="first-name">First Name</label>
                                            <input type="text" id="firstname-input" value="<?php echo $First_Name; ?>" name="First_Name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" id="lastname-input" value="<?php echo $Last_Name; ?>" name="Last_Name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" id="email-input" value="<?php echo $Email; ?>" name="Email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="username">User Name</label>
                                            <input type="text" id="username-input" name="User_Name" value="<?php echo $User_Name; ?>" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-success fa fa-user"> Edit User</button>

                                    </div> <!-- /.col -->

                                    <div class="col-sm-5">
                                        <div class="form-group">	
                                            <label for="select-role">Role</label>
                                            <select id="select-input" name="Role" class="form-control">
                                                <option value="Data Surveyor">Data Surveyor</option>
                                                <option value="Research Coordinator">Research Coordinator</option>
                                                <option value="Administrator">Administrator</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password"  name="Password" id="password-input" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm-password">Confirm Password</label>
                                            <input type="password" name="cpassword" id="username-input" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Phone">Phone Number</label>
                                            <input type="text" name="Phone" value="<?php echo $Phone; ?>" id="Phone-input" class="form-control">
                                        </div>


                                    </div> <!-- /.col -->
                                    <div class="col-sm-1"></div>


                                </div> <!-- /.row -->

                            </form>
                        </div> <!-- /.portlet-content -->

                    </div> <!-- /.portlet -->







                </div> <!-- /#content-container -->			

            </div> <!-- #content -->


        </div> <!-- #wrapper -->

        <?php
        include 'includes/footer.php';
        ?>

        <script src="./js/libs/jquery-1.9.1.min.js"></script>
        <script src="./js/libs/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="./js/libs/bootstrap.min.js"></script>

        <script src="./js/App.js"></script>

    </body>
</html>
