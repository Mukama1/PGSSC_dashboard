<style type="text/css">
body {
	background-color: #B0E0E6;
}
</style>
<div id="search">
</div>
<nav id="sidebar" class="hidden-print">		

    <ul id="main-nav" class="open-active">			

        <li class="active">				
            <a href="index.php?page=dashboardcordinator">
                <i class="fa fa-dashboard"></i>
                Control Panel
            </a>				
        </li>
       
        <?php
        //if ($_SESSION['pgsscadmin_role'] == 'Research Coordinator'):
            ?>
            <li class="dropdown">
                <a href="javascript:;"> 
                    <i class="fa fa-money"></i>
                     Hospital
                    <span class="caret"></span>
                </a>
				<ul class="sub-nav">
                    <li>
                        <a href="index.php?page=hospital">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            Add New Hospital
                        </a>
                    </li>		

                    <li>
                        <a href="index.php?page=viewhospitalscordinator">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View List of Hospitals
                        </a>
                    </li>		

                   <li>
                        <a href="index.php?page=viewhospitalscordinator">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            Assign Hospital
                        </a>
                    </li>		

                </ul>	

            </li>
     

            <li class="dropdown">
                <a href="javascript:;">
                    <i class="fa fa-group"></i>
                    Data Surveyors
                    <span class="caret"></span>
                </a>

                <ul class="sub-nav">
                    <li>
                        <a href="index.php?page=usersdatasurveyors">
                            <i class="fa fa-group"></i> 
                            Add New Data Surveyor
                        </a>
                    </li>
                    <li>
                        <a href="index.php?page=list_usersdatasurveyors">
                            <i class="fa fa-reorder"></i> 
                            View Data Surveyors
                        </a>
                    </li>

                </ul>
            </li>
            
            <li class="dropdown">
                <a href="javascript:;">
                    <i class="fa fa-gears"></i>
                    System Configurations
                    <span class="caret"></span>
                </a>

                <ul class="sub-nav">
                    <li>
                        <a href="#">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            Change Password
                        </a>
                    </li>

                </ul>
            </li>
            <?php
        //endif;
        ?>
    </ul>

</nav> <!-- #sidebar -->