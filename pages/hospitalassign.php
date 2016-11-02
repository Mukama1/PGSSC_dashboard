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

            <?php include 'includes/headerone.php'; ?>


            <div id="sidebar-wrapper" class="collapse sidebar-collapse">



                <?php
                include 'includes/navigation.php';
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
                            <form action="#" method="post">

          <?php
                                if (Input::exists()) {
                                    // 
                                    $validate = new Validate();
                                    $validation = $validate->check($_POST, array(
                                        'hname' => array(
                                            'required' => TRUE,
                                            'min' => 2
                                        ),
                                        'haddress' => array(
                                            'required' => TRUE
                                        )
                                        ,
                                        'hdirectorname' => array(
                                            'required' => TRUE
                                        )
                                        ,
                                        'hdirectorqualif' => array(
                                            'required' => TRUE
                                        )
                                        ,
                                        'hdirectorphone' => array(
                                            'required' => TRUE
                                        )
										,
                                        'level' => array(
                                            'required' => TRUE
                                        )
										,
                                        'type' => array(
                                            'required' => TRUE
                                        )
										,
                                        'staffname' => array(
                                            'required' => TRUE
                                        )
										,
                                        'staffqualif' => array(
                                            'required' => TRUE
                                        )
                                    ));
                                    if ($validation->passed()) {
                                        //
                                        $h_id = Input::get('h_id');
										$hname = Input::get('hname');
                                        $haddress = Input::get('haddress');
                                    $hdirectorname = Input::get('hdirectorname');
                               $hdirectorqualif = Input::get('hdirectorqualif');
                               $hdirectorphone = Input::get('hdirectorphone');
                                        $level = Input::get('level');
                                        $type = Input::get('type');
                                        $staffname = Input::get('staffname');
										$staffqualif = Input::get('staffqualif'); 
										$User_Name = Input::get('User_Name');
                                        $queryDup = "SELECT hname,haddress,hdirectorname,hdirectorqualif,hdirectorphone,level,type,staffname,staffqualif,pgssc_users.User_Name FROM hospitals LEFT JOIN pgssc_users ON hospitals.User_Name= pgssc_users.User_Name";
                                        // if (DB::getInstance()->checkRows($queryDup)):
                                            // echo "<h5 align='center' ><font color='red'>Hospital Already Registered.</font></h5>";
                                            // header("refresh:1;url=index.php?page=" . $crypt->encode('hospitals'));
                                            // exit();
                                           
                                        // endif;
                                        $hospitalInsert = DB::getInstance()->update('hospitals', $h_id,array(
                                            'hname' => $hname,
                                            'haddress' => $haddress,
                                            'hdirectorname' => $hdirectorname,
                                          'hdirectorqualif' => $hdirectorqualif,
                                       'hdirectorphone' => $hdirectorphone,
                                            'level' => $level,
                                            'type' => $type,
											'staffname' => $staffname,
                                            'staffqualif' => $staffqualif,
											'User_Name' => $User_Name
                                        ), "hospital_id");
                                        if ($hospitalInsert) {
                                            echo "<h5 align='center' ><strong><font color='green' size='2px'>Hospital Has Been Assigned Successfully</font></strong></h5>";
											
                                            header("refresh:1;url=index.php?page=viewhospitalscordinator");
                                        }
                                    } else {
                                        //output errors
                                        foreach ($validation->errors() as $error) {
                                            echo "<h5 align='center' ><font color='red'>" . $error . '</font></h5>';
                                        }
                                    }
                                }
								$hospital_id=Input::get('id');
							
   
                                          $assignhospital= DB::getInstance()->query("SELECT hname,haddress,hdirectorname,hdirectorqualif,hdirectorphone,level,type,staffname,staffqualif,pgssc_users.User_Name FROM hospitals LEFT JOIN pgssc_users ON hospitals.User_Name= pgssc_users.User_Name");
                                                foreach ($assignhospital->results() as $assignhospital) {
                                                    $hospital_name=$assignhospital->hname;
                                                    $hospital_address=$assignhospital->haddress;
													$hospital_director_names=$assignhospital->hdirectorname;
                                                    $hospital_director_qualification=$assignhospital->hdirectorqualif;
													$hospital_director_phone=$assignhospital->hdirectorphone;
                                                    $level_of_facility=$assignhospital->level;
													$type_of_hospital=$assignhospital->type;
                                                    $name_of_staff_completing=$assignhospital->staffname;
													$qualification_of_staff_completing=$assignhospital->staffqualif;
													$User_Name=$assignhospital->User_Name;
													
                                                }
                             
                                ?>
								
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
<input type="hidden" id="hospitalname-input" value="<?php echo $hospital_id ?>" name="h_id" class="form-control">
                                        <div class="form-group">
                                            <label for="hospital-name">Hospital Name</label>
                                            <input type="text" id="hospitalname-input" value="<?php echo $hospital_name ?>" name="hname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Hospital-address">Hospital Address</label>
                                            <input type="text" id="Hospital-address-input" value="<?php echo $hospital_address; ?>" name="haddress" class="form-control">
                                        </div>
                                        <div class="form-group">
                                         <label for="hdirectorname">Hospital Director's Name</label>
                                            <input type="text" id="hdirectorname-input" value="<?php echo $hospital_director_names; ?>" name="hdirectorname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="hdirectorqualif">Hospital Director's Qualification</label>
                                            <input type="text" id="hdirectorqualif-input" name="hdirectorqualif" value="<?php echo $hospital_director_qualification; ?>" class="form-control">
                                        </div>
										<div class="form-group">
                                            <label for="hdirectorphone">Hospital Director's Phone Number</label>
                                            <input type="text" name="hdirectorphone" value="<?php echo $hospital_director_phone; ?>" id="hdirectorphone-input" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-success fa fa-user"> Assign Hospital</button>

                                    </div> <!-- /.col -->

                                    <div class="col-sm-5">
                                        <div class="form-group">	
<label for="select-level">What level of facility is being evaluated?</label>
                     <select id="select-input" name="level" value="<?php echo $level_of_facility; ?>" class="form-control">
                          <option value="clinic">Clinic </option>
                           <option value="district">District</option>
                         <option value="tertiary">Tertiary</option>
                                            </select>
                                        </div>
										<div class="form-group">	
<label for="select-type">What type of hospital is being evaluated?</label>                 <select id="select-input" name="type" value="<?php echo $type_of_hospital; ?>"class="form-control">
                 <option value="public">Public</option>
				<option value="private">Private </option>
				<option value="ngo">NGO</option>
				<option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
<label for="staffname">Name of the Staff Completing this Assessment</label>
<input type="staffname"  name="staffname" value="<?php echo $name_of_staff_completing; ?>" id="staffname-input" class="form-control">
                                        </div>
                                        <div class="form-group">
<label for="staffqualif">Qualification of the Staff Completing this Assessment</label>
<input type="staffqualif" name="staffqualif" value="<?php echo $qualification_of_staff_completing; ?>" id="staffqualif-input" class="form-control">
                                        </div>
				<div class="form-group">
                                            <label for="User_Name">User Name Assigned</label>
                                            <input type="text" name="User_Name" value="<?php echo $User_Name; ?>" id="User_Name-input" class="form-control">
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
