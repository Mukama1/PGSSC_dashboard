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

            <?php include 'includes/headerone.php'; ?>


            <div id="sidebar-wrapper" class="collapse sidebar-collapse">

                <?php
                include 'includes/navigation.php';
                ?>

            </div> <!-- /#sidebar-wrapper -->


            <div id="content">		

                <div id="content-header">
                    <h1> Administrator Dashboard</h1>
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
//                                            $counter = 0;
//                                            $orders = DB::getInstance()->query("SELECT * FROM jerm_orders WHERE Status='Not Completed' GROUP BY Order_Number");
//                                            foreach ($orders->results() as $orders) {
//                                                $counter++;
//                                            }
//                                            echo seperators($counter);
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
                   <span class="content"><B>Incomplete Hospitals Survey</B></span>
                                        <span class="value"> <?php
//                                            $counter_cart = 0;
//                                            $orders_cart = DB::getInstance()->query("SELECT * FROM jerm_cart GROUP BY User_Id");
//                                            foreach ($orders_cart->results() as $orders_cart) {
//                                                $counter_cart++;
//                                            }
//                                            echo seperators($counter_cart);
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
                                        <span class="value">
											</span>
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
                            <span class="content"><B>Registered Users</B></span>
                                        <span class="value"><?php
//                                            $counter_users = 0;
//                                            $_users = DB::getInstance()->query("SELECT * FROM pgssc_users");
//                                            foreach ($_users->results() as $_users) {
//                                                $counter_users++;
//                                            }
//                                            echo seperators($counter_users);
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
                                                    <b> Data Surveyors Assigned Hospitals </B>
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
                                                            $assigned_hospital = DB::getInstance()->query("SELECT hname,haddress,pgssc_users.First_Name,pgssc_users.Last_Name,pgssc_users.Phone FROM hospitals INNER JOIN pgssc_users ON hospitals.User_Name= pgssc_users.User_Name");
                                                            foreach ($assigned_hospital->results() as $assigned_hospital) {
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


                                            </div> <!-- /.portlet-content -->

                                        </div> <!-- /.portlet -->


                                    </div> <!-- /.col-md-4 -->



                                    <div class="col-md-6">

                                        <div class="portlet">

                                            <div class="portlet-header">

                                                <h3>
                                                    <i class="fa fa-group"></i>
                                                    Recent Signups
                                                </h3>

                                                <ul class="portlet-tools pull-right">
                                                    <li>
                                                        <button class="btn btn-sm btn-default">
                                                            <a href="#"> ALL USERS</a>
                                                        </button>
                                                    </li>
                                                </ul>

                                            </div> <!-- /.portlet-header -->

                                            <div class="portlet-content">


                                                <div class="table-responsive">

                                                    <table id="user-signups" class="table table-striped table-checkable"> 
                                                        <thead> 
                                                            <tr> 
                                                                <th class="checkbox-column"> 
                                                                    <input type="checkbox" id="check-all" class="icheck-input" />
                                                                </th> 
                                                                <th class="hidden-xs">First Name
                                                                </th> 
                                                                <th>Last Name</th> 
                                                                <th>Status</th> 

                                                            </tr> 
                                                        </thead> 

                                                        <tbody> 
                                                            <?php
                                                            $recent_users = DB::getInstance()->query("SELECT * FROM pgssc_users ORDER BY User_Id DESC LIMIT 10");
                                                            foreach ($recent_users->results() as $recent_users) {
                                                                ?>
                                                                <tr class=""> 
                                                                    <td class="checkbox-column"> 
                                                                        <input type="checkbox" name="actiony" value="joey" class="icheck-input"> 
                                                                    </td> 

                                                                    <td class="hidden-xs"><?php echo $recent_users->First_Name; ?></td> 
                                                                    <td><?php echo $recent_users->Last_Name; ?></td> 
                                                                    <td><span class="label label-success">Approved</span></td> 
                                                                </tr> 
    <?php } ?>
                                                        </tbody> 
                                                    </table>


                                                </div> <!-- /.table-responsive -->

                                            </div> <!-- /.portlet-content -->

                                        </div> <!-- /.portlet -->

                                    </div> <!-- /.col-md-4 -->


                                </div> <!-- /.row -->

                            <div class="portlet">

                                <div class="portlet-header">

                                    <h3>
                                        <i class="fa fa-calendar"></i>
                                        Administrator's Calendar
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