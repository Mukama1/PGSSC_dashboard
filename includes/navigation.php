<style type="text/css">
body {
	background-color: #4682B4;
}
</style>
<div id="search">
</div>
<nav id="sidebar" class="hidden-print">		

    <ul id="main-nav" class="open-active">			

        <li class="active">				
            <a href="index.php?page=dashboard">
                <i class="fa fa-dashboard"></i>
                Administrator's Control Panel
            </a>				
        </li>
       
        <?php
        //if ($_SESSION['pgsscadmin_role'] == 'Administrator'):
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
                            Add Hospital
                        </a>
                    </li>		

                   <li>
                        <a href="index.php?page=pickhospital">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            Assign Hospital
                        </a>
                    </li>						
				
                </ul>	

            </li>
     
            
			            <li class="dropdown">
                <a href="javascript:;"> 
                    <i class="fa fa-book fa-fw"></i>
                     Reports
                    <span class="caret"></span>
                </a>
				<ul class="sub-nav">
                    <li>
                        <a href="index.php?page=viewhospitals">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View List of Hospitals
                        </a>
                    </li>	 
					
					<li>
                        <a href="index.php?page=viewassignedhospitals">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View List of Assigned Hospitals
                        </a>
                    </li>	
					
					<li>
                        <a href="index.php?page=viewassigneddatasurveyorperhospital">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View Data Surveyors Assigned To a Specific Hospital
                        </a>
                    </li>	
					
					
                   	<li>
                        <a href="index.php?page=viewhospitalsstatus">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View Hospitals Survey Status
                        </a>
                    </li>		
					
					<li>
                        <a href="index.php?page=completedhospitals">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View Completed Hospitals Survey
                        </a>
                    </li>
		            
					<li>
                        <a href="index.php?page=ongoinghospitals">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View Ongoing Hospitals Survey
                        </a>
                    </li>			
					
					<li>
                        <a href="index.php?page=pendinghospitals">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View Pending Hospitals Survey
                        </a>
                    </li>			
                </ul>	

            </li>
			
			
            <li class="dropdown">
                <a href="javascript:;">
                    <i class="fa fa-group"></i>
                    Users
                    <span class="caret"></span>
                </a>

                <ul class="sub-nav">
                    <li>
                        <a href="index.php?page=users">
                            <i class="fa fa-group"></i> 
                            Add New User
                        </a>
                    </li>
                    <li>
                        <a href="index.php?page=list_users">
                            <i class="fa fa-reorder"></i> 
                            View Users
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