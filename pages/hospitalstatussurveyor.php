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

            <?php include 'includes/headeronesurveyor.php';
 

			?>


            <div id="sidebar-wrapper" class="collapse sidebar-collapse">



                <?php
                include 'includes/navigationsurveyor.php';
                ?>

            </div> <!-- /#sidebar-wrapper -->



            <div id="content">		

                <div id="content-header">
                    <h1>Hospital Survey Status</h1>
                </div> <!-- #content-header -->	


                <div id="content-container">	
                    <div class="portlet">

                        <div class="portlet-header">

                            <h3>
                                <i class="fa fa-group"></i>
                               Change Hospital Status
                            </h3>

                        </div> <!-- /.portlet-header -->

                        <div class="portlet-content">
                            <form action="#" method="post">

          <?php
                                if (Input::exists()) {
                                    // 
                                    $validate = new Validate();
                                    $validation = $validate->check($_POST, array(
                                        'hospital_status' => array(
                                            'required' => TRUE,
                                            'min' => 2
                                        )
                                       
                                    ));
                                    if ($validation->passed()) {
                                        //
                                        $h_status = Input::get('hospital_status');
                                        $hospitalInsert = DB::getInstance()->update('assignhospital', $_SESSION['pgsscadmin_h_id'],array(
                                            'Status' => $h_status
                                        ), "hospital_id");
                                        if ($hospitalInsert) {
                                            echo "<h5 align='center' ><strong><font color='green' size='2px'>Hospital Status Has Been Updated Successfully</font></strong></h5>";
											
                                            header("refresh:1;url=index.php?page=dashboard");
                                        }
                                    } else {
                                        //output errors
                                        foreach ($validation->errors() as $error) {
                                            echo "<h5 align='center' ><font color='red'>" . $error . '</font></h5>';
                                        }
                                    }
                                }
                             
                                ?>
								
                                <div class="row">
                                    <div class="col-sm-1"></div>

                                    <div class="col-sm-5">
                                        <div class="form-group">	
<label for="select-level">Select Status</label>
                     <select id="select-input" name="hospital_status" value="<?php echo $level_of_facility; ?>" class="form-control">
                          <option value="Ongoing">Ongoing </option>
                           <option value="Completed">Completed</option>
                                            </select>
                                        </div>
                                        


                                    </div> <!-- /.col -->
                                    <div class="col-sm-1">
									<br/>
									<button class="btn btn-success" type="submit">Update Status</button>
									</div>


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
