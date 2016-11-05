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

<body bgcolor="#B0E0E6">
      <div id="wrapper">

            <?php include 'includes/headeronecordinator.php'; ?>


            <div id="sidebar-wrapper" class="collapse sidebar-collapse">



                <?php
                include 'includes/navigationcordinator.php';
                ?>

            </div> <!-- /#sidebar-wrapper -->



            <div id="content">		

                <div id="content-header">
                    <h1>Hospitals</h1>
                </div> <!-- #content-header -->	


                <div id="content-container">	
                    <div class="portlet">

                        <div class="portlet-header">

                            <h3>
                                <i class="fa fa-group"></i>
                               Assign A Hospital
                            </h3>

                        </div> <!-- /.portlet-header -->

                        <div class="portlet-content">

    <form method="post" action="#">
	
	<?php
                                if (Input::exists()) {
                                    // 
                                    $validate = new Validate();
                                    $validation = $validate->check($_POST, array(
                                        'hospital_id' => array(
                                            'required' => TRUE,
                                            'min' => 1
                                        ),
										'user_id' => array(
                                            'required' => TRUE,
                                            'min' => 1
                                        )
                                    ));
                                    if ($validation->passed()) {
                                        //
                                        $hospital_id = Input::get('hospital_id');
                                        $user_id = Input::get('user_id');
                                        $hospitalInsert = DB::getInstance()->insert('assignhospital', array(
                                            'hospital_id' => $hospital_id,
                                            'User_id' => $user_id
                                        ));
                                        if ($hospitalInsert) {
                                            echo "<h5 align='center' ><strong><font color='green' size='2px'>Hospital Has been assigned successfully</font></strong></h5>";
											
                                            header("refresh:2;url=index.php?page=pickhospital");
                                        }
                                    } else {
                                        //output errors
                                        foreach ($validation->errors() as $error) {
                                            echo "<h5 align='center' ><font color='red'>" . $error . '</font></h5>';
                                        }
                                    }
                                }
                                ?>
								<div class="form-group col-sm-6">	
                                            <label for="select-role">Select Hospital</label>
                                            <select id="select-input" name="hospital_id" class="form-control">
                                                <?php
												 echo DB::getInstance()->dropDowns("hospitals","hospital_id","hname");
												?>
                                            </select>
                                        </div>
										<div class="form-group col-sm-6">	
                                            <label for="select-role">Select Data Surveyor</label>
                                            <select id="select-input" name="user_id" class="form-control">
                                                <?php
												 echo DB::getInstance()->dropDowns("pgssc_users","User_id","User_Name");
												?>
                                            </select>
                                        </div>
        
       
  

        
<br/>
  <button class="btn btn-success" type="submit">Assign Hospital</button>
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