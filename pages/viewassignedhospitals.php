<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>PGSSC -Hospitals</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="">
        <meta name="author" content="" />

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,800italic,400,600,800" type="text/css">
        <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css" />		
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css" />	
        <link rel="stylesheet" href="./js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.css" type="text/css" />			

        <link rel="stylesheet" href="./js/plugins/icheck/skins/minimal/blue.css" type="text/css" />

        <link rel="stylesheet" href="./css/App.css" type="text/css" />

        <link rel="stylesheet" href="./css/custom.css" type="text/css" />

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

                    <div class="row">

                        <div class="col-md-12">

                            <div class="portlet">

                                <div class="portlet-header">

                                    <h3>
                                        <i class="fa fa-list"></i>
                                        List of Data Surveyors Assigned Hospitals
                                    </h3>

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
                                                    <th class="checkbox-column">
                                                        <input type="checkbox" class="icheck-input">
                                                    </th>
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
																	<td class="checkbox-column">
																		<input type="checkbox" class="icheck-input">
																	</td>
                                                                    <td class="hidden-xs"><?php echo $assigned_hospital->hname; ?></td> 
																	<td class="hidden-xs"><?php echo $assigned_hospital->haddress; ?></td> 
																	<td><?php echo $assigned_hospital->First_Name." ".$assigned_hospital->Last_Name;  ?></td>
                                                                    <td><?php echo $assigned_hospital->Phone; ?></td> 
                                                                </tr> 
															<?php } ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-responsive -->


                                </div> <!-- /.portlet-content -->

                            </div> <!-- /.portlet -->



                        </div> <!-- /.col -->

                    </div> <!-- /.row -->








                </div> <!-- /#content-container -->



            </div> <!-- #content -->


        </div> <!-- #wrapper -->

        <?php
        include 'includes/footer.php';
        ?>

        <script src="./js/libs/jquery-1.9.1.min.js"></script>
        <script src="./js/libs/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="./js/libs/bootstrap.min.js"></script>

        <script src="./js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="./js/plugins/datatables/DT_bootstrap.js"></script>
        <script src="./js/plugins/tableCheckable/jquery.tableCheckable.js"></script>

        <script src="./js/plugins/icheck/jquery.icheck.min.js"></script>

        <script src="./js/App.js"></script>


    </body>
</html>