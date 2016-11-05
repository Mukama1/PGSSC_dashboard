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
                    <h1> Cordinator Dashboard</h1>
                </div> <!-- #content-header -->	


                <div id="content-container">
                   
                        <div class="row">

                            <div class="col-md-3 col-sm-6">

                                <a href="javascript:;" class="dashboard-stat primary">
                                    <div class="visual">
                                        <i class="fa fa-star"></i>
                                    </div> <!-- /.visual -->

                                    <div class="details">
                     <span class="content"><B>Completed Hospitals Survey</B></span>
                                        <span class="value">
                                            <?php
                                            $counter = 0;
                                            $orders = DB::getInstance()->query("SELECT * FROM assignhospital WHERE Status='Completed' GROUP BY User_id");
                                            foreach ($orders->results() as $orders) {
                                                $counter++;
                                            }
                                            echo seperators($counter);
                                            ?></span>
                        </div> <!-- /.details -->

                                    <i class="fa fa-play-circle more"></i>

                                </a> <!-- /.dashboard-stat -->

                            </div> <!-- /.col-md-3 -->

                            <div class="col-md-3 col-sm-6">

                                <a href="javascript:;" class="dashboard-stat secondary">
                                    <div class="visual">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div> <!-- /.visual -->

                                    <div class="details">
                   <span class="content"><B>Ongoing Surveys</B></span>
                                        <span class="value"> <?php
                                            $counter_cart = 0;
                                             $orders_cart = DB::getInstance()->query("SELECT * FROM assignhospital WHERE Status='Ongoing' GROUP BY User_id");
                                             foreach ($orders_cart->results() as $orders_cart) {
                                                 $counter_cart++;
                                             }
                                             echo seperators($counter_cart);
                                            ?></span>
                                    </div> <!-- /.details -->

                                    <i class="fa fa-play-circle more"></i>

                                </a> <!-- /.dashboard-stat -->

                            </div> <!-- /.col-md-3 -->

                          

                            <div class="col-md-3 col-sm-6">

                                <a href="javascript:;" class="dashboard-stat">
                                    <div class="visual">
                                        <i class="fa fa-money"></i>
                                    </div> <!-- /.visual -->

                                    <div class="details">
                   <span class="content"><B>Pending Hospitals Survey</B></span>
                                       <span class="value"> <?php
                                            $counter_cart = 0;
                                             $orders_cart = DB::getInstance()->query("SELECT * FROM assignhospital WHERE Status='Pending' GROUP BY User_id");
                                             foreach ($orders_cart->results() as $orders_cart) {
                                                 $counter_cart++;
                                             }
                                             echo seperators($counter_cart);
                                            ?></span>
                                    </div> <!-- /.details -->

                                    <i class="fa fa-play-circle more"></i>

                                </a> <!-- /.dashboard-stat -->

                            </div> <!-- /.col-md-9 -->

  <div class="col-md-3 col-sm-6">

                                <a href="javascript:;" class="dashboard-stat tertiary">
                                    <div class="visual">
                                        <i class="fa fa-clock-o"></i>
                                    </div> <!-- /.visual -->

                                    <div class="details">
                            <span class="content"><B>Registered Data Surveyors</B></span>
                                        <span class="value"><?php
                                            $counter_users = 0;
                                            $_users = DB::getInstance()->query("SELECT * FROM pgssc_users WHERE Role='Data Surveyor'");
                                            foreach ($_users->results() as $_users) {
                                                $counter_users++;
                                            }
                                            echo seperators($counter_users);
                                            ?></span>
                                    </div> <!-- /.details -->

                                    <i class="fa fa-play-circle more"></i>

                                </a> <!-- /.dashboard-stat -->

                            </div> <!-- /.col-md-3 -->


                        </div> <!-- /.row -->



                    <div class="row">

                        <div class="col-md-12">



                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="portlet">

                                            <div class="portlet-header">

                                                <h3>
                                                    <i class="fa fa-money"></i>
                                                    Assigned Hospitals
                                              </h3>

                                                <ul class="portlet-tools pull-right">
                                                    <li>
                                                        <button class="btn btn-sm btn-default">
                                                            <a href="#"> ALL </a>
                                                        </button>
                                                    </li>
                                                </ul>

                                            </div> <!-- /.portlet-header -->

                                            <div class="portlet-content">

                                               <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                    <th data-filterable="true" data-sortable="true" data-direction="desc">Hospital Name</th>
                                                    <th data-direction="asc" data-filterable="true" data-sortable="true">Hospital Address</th>
                                                    <th data-filterable="true" data-sortable="true">Data Surveyor's Name</th>
                                                    <th data-filterable="true" class="hidden-xs hidden-sm">Phone Number</th>
                                                      </tr>
                                                        </thead>
                                                        <tbody> 
                                                            <?php
															$edithospital= DB::getInstance()->query("SELECT a.*,pu.*,h.*   from assignhospital a,pgssc_users pu,hospitals h where h.hospital_id=a.hospital_id and pu.User_id=a.User_id");
														   // $edithospital= DB::getInstance()->query("SELECT hospitals.hname,hospitals.haddress,pgssc_users.First_Name,pgssc_users.Last_Name,pgssc_users.Phone FROM hospitals INNER JOIN assignhospital ON hospitals.hospital_id=assignhospital.hospital_id INNER JOIN pgssc_users ON hospitals.User_id = pgssc_users.User_id");                                                           
														   //$edithospital= DB::getInstance()->query("SELECT hname,haddress,pgssc_users.First_Name,pgssc_users.Last_Name,pgssc_users.Phone FROM hospitals INNER JOIN assignhospital ON hospitals.hospital_id=".$_SESSION['pgsscadmin_h_id']);                                                           
														   //$assigned_hospital = DB::getInstance()->query("SELECT hname,haddress,pgssc_users.First_Name,pgssc_users.Last_Name,pgssc_users.Phone FROM hospitals INNER JOIN pgssc_users ON hospitals.User_Name= pgssc_users.User_Name");
                                                            foreach ($edithospital->results() as $assigned_hospital) {
                                                                ?>
                                                                <tr class=""> 
                                                                    <td class="hidden-xs"><?php echo $assigned_hospital->hname; ?></td> 
																	<td class="hidden-xs"><?php echo $assigned_hospital->haddress; ?></td> 
																	<td><?php echo $assigned_hospital->First_Name." ".$assigned_hospital->Last_Name;  ?></td>
                                                                    <td><?php echo $assigned_hospital->Phone; ?></td> 
                                                                </tr> 
															<?php } ?>
                                                        </tbody> 
                                                    </table>
                                                </div> <!-- /.table-responsive -->
                                                <br/>


                                            <!-- </div> <!-- /.portlet-content -->

                                        </div> <!-- /.portlet -->


                                    </div> <!-- /.col-md-4 -->



                                                </div> <!-- /.table-responsive -->

                                            </div> <!-- /.portlet-content -->

                                        </div> <!-- /.portlet -->

                                   <!--  </div> <!-- /.col-md-4 -->


                                </div> <!-- /.row -->

                            <div class="portlet">

                                <div class="portlet-header">

                                    <h3>
                                        <i class="fa fa-calendar"></i>
                                        Cordinator's Calendar
                                    </h3>

                                </div> <!-- /.portlet-header -->

                                <div class="portlet-content">


                                    <div id="full-calendar"></div>


                                </div> <!-- /.portlet-content -->

                            </div> <!-- /.portlet -->



                        </div> <!-- /.col-md-9 -->




                    </div> <!-- /.row -->

                </div> <!-- /#content-container -->


            </div> <!-- #content -->	

        </div> <!-- #wrapper -->

        <?php
        include 'includes/footer.php';
        ?>

        <script src="js/libs/jquery-1.9.1.min.js"></script>
        <script src="js/libs/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="js/libs/bootstrap.min.js"></script>

        <script src="js/plugins/icheck/jquery.icheck.min.js"></script>
        <script src="js/plugins/select2/select2.js"></script>
        <script src="js/plugins/tableCheckable/jquery.tableCheckable.js"></script>

        <script src="js/App.js"></script>

        <script src="js/libs/raphael-2.1.2.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>

        <script src="js/demos/charts/morris/area.js"></script>
        <script src="js/demos/charts/morris/donut.js"></script>

        <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

        <script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
        <script src="js/demos/calendar.js"></script>

        <script src="js/demos/dashboard.js"></script>

    </body>
</html>