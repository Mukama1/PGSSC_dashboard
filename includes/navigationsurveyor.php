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
            <a href="index.php?page=dashboardsurveyor">
                <i class="fa fa-dashboard"></i>
                Control Panel
            </a>				
        </li>
       
        <?php
        //if ($_SESSION['pgsscadmin_role'] == 'Data Surveyor'):
            ?>
            <li class="dropdown">
                <a href="javascript:;">
                    <i class="fa fa-money"></i>
                     Hospital
                    <span class="caret"></span>
                </a>
				<ul class="sub-nav">
                    <li>
                        <a href="index.php?page=instructionsdatasurveyor">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View Quantitative Survey Instructions
                        </a>
                    </li>		
                    <li>
                        <a href="index.php?page=instructionsdatasurveyor2">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            View Qualitative Survey Instructions
                        </a>
                    </li>		

                    <li>
                        <a href="index.php?page=hospitaleditsurveyor">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            Edit Hospital Information
                        </a>
                    </li>		
                
				  <li>
                        <a href="index.php?page=hospitalstatussurveyor">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            Hospital Survey Status
                        </a>
                    </li>
				
                <li>
                        <a href="index.php?page=dashboardsurveyor">
                            <i class="fa fa-arrow-circle-o-right"></i> 
                            Start Hospital Survey
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