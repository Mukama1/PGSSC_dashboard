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

            <?php include 'includes/headeronesurveyor.php'; ?>


            <div id="sidebar-wrapper" class="collapse sidebar-collapse">

                <?php
                include 'includes/navigationsurveyor.php';
                ?>

            </div> <!-- /#sidebar-wrapper -->


            <div id="content">		

                <div id="content-header">
                    <h1> Data Surveyor Dashboard</h1>
                </div> <!-- #content-header -->	


                <div id="content-container">
                   
                        <div class="row">

                            <div class="col-md-3 col-sm-6">

                                
                                   

                                 

                                    

                                </a> <!-- /.dashboard-stat -->

                            </div> <!-- /.col-md-3 -->

                            <div class="col-md-3 col-sm-6">

                              
                                    

                                </a> <!-- /.dashboard-stat -->

                            </div> <!-- /.col-md-3 -->

                          





                    <div class="row">

                        <div class="col-md-12">



                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="portlet">

                                            <div class="portlet-header">

                                                <h3>
                                                    <i class="fa fa-money"></i>
                                                    Assigned Hospital
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
                                                    <table 
                                            class="table table-striped table-bordered table-hover table-highlight table-checkable" 
                                            data-provide="datatable" 
                                            data-display-rows="10"
                                            data-info="true"
                                            data-search="true"
                                            data-length-change="true"
                                            data-paginate="true"
                                            >
                                                        <thead>
                                                        <tr>
                                                   <th data-filterable="true" data-sortable="true" data-direction="desc">Hospital Name</th>
                                                    <th data-direction="asc" data-filterable="true" data-sortable="true">Hospital Address</th>
                                                    <th data-filterable="true" data-sortable="true">Hospital Director</th>
                                                    <th data-filterable="true" class="hidden-xs hidden-sm">Director's Qualification</th>
                                                    <th data-filterable="true" class="hidden-xs hidden-sm">Director's Phone Number</th>
                                                    <th data-filterable="true" class="hidden-xs hidden-sm">Facility Level Evaluated</th>
                                                    <th data-filterable="true" class="hidden-xs hidden-sm">Type of Hospital Evaluated</th>
                                                    <th data-filterable="true" class="hidden-xs hidden-sm">Name of Staff Completing Assessment</th>
													<th data-filterable="true" class="hidden-xs hidden-sm">Qualification of Staff Completing Assessment</th>
                                                      </tr>
                                                        </thead>
                                                        <tbody> 
                                                            <?php
															
															
                                                            $assigned_hospital = DB::getInstance()->query("SELECT hname,haddress,hdirectorname,hdirectorqualif,hdirectorphone,level,type,staffname,staffqualif FROM hospitals where hospital_id=".$_SESSION['pgsscadmin_h_id']);
															//$assigned_hospital = DB::getInstance()->query("SELECT hname,haddress,pgssc_users.First_Name,pgssc_users.Last_Name,pgssc_users.Phone FROM hospitals INNER JOIN pgssc_users ON hospitals.User_Name= pgssc_users.User_Name");
                                                            foreach ($assigned_hospital->results() as $assigned_hospital) {
                                                                ?>
                                                                <tr class=""> 
																
																<td><?php echo $assigned_hospital->hname;  ?></td>
																<td><?php echo $assigned_hospital->haddress;  ?></td>
																<td><?php echo $assigned_hospital->hdirectorname;  ?></td>
																<td><?php echo $assigned_hospital->hdirectorqualif;  ?></td>
																<td><?php echo $assigned_hospital->hdirectorphone;  ?></td>
																<td><?php echo $assigned_hospital->level;  ?></td>
																<td><?php echo $assigned_hospital->type;  ?></td>
																<td><?php echo $assigned_hospital->staffname;  ?></td>
																<td><?php echo $assigned_hospital->staffqualif;  ?></td>

                                                                </tr> 
															<?php } ?>
                                                        </tbody> 
                                                    </table>
                                                </div> <!-- /.table-responsive -->
                                                <br/>


                                            </div> <!-- /.portlet-content -->

                                        </div> <!-- /.portlet -->


                                    </div> <!-- /.col-md-4 -->



                                    

                            <div class="portlet">

                                <div class="portlet-header">

                                    <h3>
                                        <i class="fa fa-calendar"></i>
                                        Hospital Survey  Calendar
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