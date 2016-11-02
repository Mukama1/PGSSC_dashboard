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

    <form method="get" action="#">
        
        <select id="cd" name="cd">
        
            <?php
            
            $mysqlserver="127.0.0.1";
            $mysqlusername="root";
            $mysqlpassword="";
            $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
            $dbname = 'pgssc';
            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
            $cdquery="SELECT hname FROM hospitals";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from hospitals failed: ".mysql_error());
            
			while ($cdrow=mysql_fetch_array($cdresult)) {
            $hname=$cdrow["hname"];
                echo "<option>$hname</option>";
            
            }
                
            ?>
    
        </select>
  

        <select id="cd" name="cd">
        
            <?php
            
            $mysqlserver="127.0.0.1";
            $mysqlusername="root";
            $mysqlpassword="";
            $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
            $dbname = 'pgssc';
            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
            $cdquery="SELECT User_Name FROM pgssc_users";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from Users failed: ".mysql_error());
            
			while ($cdrow=mysql_fetch_array($cdresult)) {
            $User_Name=$cdrow["User_Name"];
                echo "<option>$User_Name</option>";
            
            }
                
            ?>
    
        </select>

  
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