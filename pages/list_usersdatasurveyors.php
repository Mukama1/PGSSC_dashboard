<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <title>PGSSC Data Surveyors</title>
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

                    <div class="row">

                        <div class="col-md-12">

                            <div class="portlet">

                                <div class="portlet-header">

                                    <h3>
                                        <i class="fa fa-list"></i>
                                        List of Data Surveyors
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
                                                    <th data-filterable="true" data-sortable="true" data-direction="desc">User Name</th>
                                                    <th data-direction="asc" data-filterable="true" data-sortable="true">Full Names</th>
                                                    <th data-filterable="true" data-sortable="true">Email</th>
                                                    <th data-filterable="true" class="hidden-xs hidden-sm">Phone Number</th>
                                                    <th data-filterable="true" class="hidden-xs hidden-sm">Role</th>
													<th data-filterable="true" class="hidden-xs hidden-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $users_list = DB::getInstance()->query("SELECT * FROM pgssc_users WHERE Role = 'Data Surveyor'");
                                                foreach ($users_list->results() as $users_list) {
                                                    ?>
                                                    <tr>
                                                        <td class="checkbox-column">
                                                            <input type="checkbox" class="icheck-input">
                                                        </td>
                                                        <td><?php echo $users_list->User_Name;  ?></td>
                                                        <td><?php echo $users_list->First_Name." ".$users_list->Last_Name;  ?>
                                                        </td>
                                                        <td><?php echo $users_list->Email;  ?></td>
                                                        <td class="hidden-xs hidden-sm"><?php echo $users_list->Phone;  ?></td>
                                                        <td class="hidden-xs hidden-sm"><?php echo $users_list->Role;  ?></td>
														<td> <a href="index.php?page=usersedit&id=<?php echo $users_list->User_id;?>">Edit</a>
                                                    </tr>  
                                                    <?php
                                                }
                                                ?>
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