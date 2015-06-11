<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <!--				<li class="sidebar-search-wrapper">
                                                     BEGIN RESPONSIVE QUICK SEARCH FORM 
                                                    <form class="sidebar-search" action="extra_search.html" method="POST">
                                                            <div class="form-container">
                                                                    <div class="input-box">
                                                                            <a href="javascript:;" class="remove">
                                                                            </a>
                                                                            <input type="text" placeholder="Search..."/>
                                                                            <input type="button" class="submit" value=" "/>
                                                                    </div>
                                                            </div>
                                                    </form>
                                                     END RESPONSIVE QUICK SEARCH FORM 
                                            </li>-->
            <?php
            if ($page == 'dashboard') {
                echo '<li class="start active">';
            } else {
                echo '<li class="start">';
            }
            ?>

            <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-home"></i>
                <span class="title">
                    <?php echo $this->lang->line("dashboard_menu"); ?>
                </span>
                <span class="selected">
                </span>
            </a>
            </li>
           
            <!--user start-->
            <?php
            if ($page == 'user') {
                echo '<li class="start active">';
            } else {
                echo '<li class="start">';
            }
            ?>
            <a href="<?php echo base_url(); ?>users">
                <i class="fa fa-user"></i>
                <span class="title">
                    <?php echo $this->lang->line("users_menu"); ?>
                </span>
                <span class="selected">
                </span>
            </a>
            </li>
            <!--user end-->
            <?php
            if ($page == 'group') {
                echo '<li class="start active">';
            } else {
                echo '<li class="start">';
            }
            ?>
            <a href="<?php echo base_url(); ?>groups">
                <i class="fa fa-group"></i>
                <span class="title">
                    <?php echo $this->lang->line("group_menu"); ?>
                </span>
                <span class="selected">
                </span>
            </a>
            </li>
            <!--group end-->
              <?php
//            if ($page == 'role') {
//                echo '<li class="start active">';
//            } else {
//                echo '<li class="start">';
//            }
            ?>
<!--            <a href="<?php echo base_url(); ?>roles">
                <i class="fa fa-group"></i>
                <span class="title">
                <?php echo $this->lang->line("roles_menu"); ?>
                </span>
                <span class="selected">
                </span>
            </a>
            </li>-->
            <!--location start-->
            <?php
//            if ($page == 'location') {
//                echo '<li class="start active">';
//            } else {
//                echo '<li class="start">';
//            }
            ?>
<!--            <a href="<?php echo base_url(); ?>location">
                <i class="fa fa-home"></i>
                <span class="title">
                    <?php echo $this->lang->line("building_menu"); ?>
                </span>
                <span class="selected">
                </span>
            </a>
            </li>-->
            <!--location end-->
            <!--layer start-->
           <?php
//            if ($page == 'layers') {
//                echo '<li class="start active">';
//            } else {
//                echo '<li class="start">';
//            }
            ?>
             <?php
            if ($page == 'layers' || $page == 'location') {
                echo '<li class="start active">';
            } else {
                echo '<li class="start">';
            }
            ?>
     <a href="<?php echo base_url(); ?>layers">
      <i class="fa fa-bars"></i>
      <span class="title">
       <?php echo $this->lang->line("layers_menu"); ?>
      </span>
<!--      <span class="arrow ">
      </span>-->
     </a>
        </li>
            <!--checkk-->
            <!--layer end-->
            <!--inventory start-->
            <?php
//            if ($page == 'inventory') {
//                echo '<li class="start active">';
//            } else {
//                echo '<li class="start">';
//            }
//            ?>

<!--            <a href="//<?php echo base_url(); ?>inventory">
                <i class="fa fa-archive"></i>
                <span class="title">
                  //<?php echo $this->lang->line("inventory_menu"); ?>
                </span>
                <span class="selected">
                </span>
            </a>
            </li>-->
            
            
            
            <!--inventory with sub menus -->
             <?php
//            if ($page == 'inventory') {
//                echo '<li class="start active">';
//            } else {
//                echo '<li class="start">';
//            }
            ?>
<!--     <a href="javascript:;">
      <i class="fa fa-archive"></i>
      <span class="title">
      <?php echo $this->lang->line("inventory_menu"); ?>
      </span>
      <span class="arrow ">
      </span>
     </a>
     <ul class="sub-menu">
      <li>-->
<!--       <a href="javascript:;">
        <i class="fa fa-building-o"></i>
        <span class="title">
        <?php echo $this->lang->line("Goods"); ?>
        </span>
      <span class="arrow ">
      </span> 
       </a>
       <ul class="sub-menu">-->
<?php 
if ($page == 'inventory_locations') {
                echo '<li class="start active">';
            } else {
                echo '<li class="start">';
            }
            ?>
       <a href="<?php echo base_url(); ?>inventory">
        <i class="fa fa-building-o"></i>
       <?php echo $this->lang->line("dashboard_location_menu"); ?>
       </a>
      </li>
      <?php 
if ($page == 'inventory_articles') {
                echo '<li class="start active">';
            } else {
                echo '<li class="start">';
            }
            ?>
       <a href="<?php echo base_url(); ?>inventory/goods">
        <i class="fa fa-bars"></i>
        <?php echo $this->lang->line("dashboard_location_article"); ?>
       </a>
      </li>
<!--      
     </ul>
      </li>-->
      
      <?php 
if ($page == 'inventory_works') {
                echo '<li class="start active">';
            } else {
                echo '<li class="start">';
            }
            ?>
       <a href="<?php echo base_url(); ?>inventory/works">
        <i class="fa fa-bars"></i>
        <?php echo $this->lang->line("dashboard_location_work"); ?>
       </a>
<!--      </li>
     </ul>-->
    </li>
            <!--inventory with sub menus -->
            <!--log end-->
            <!--location end-->
            <!--registration start-->
            <?php
//if($page == 'registration')
//                                {
//                                    echo '<li class="start active">';
//                                }
//                                else
//                                {
//                                echo '<li class="start">';
//                                } 
            ?>

<!--                <a href="<?php echo base_url(); ?>registration">-->
<!--                    <i class="fa fa-home"></i>
         <span class="title">
            <?php //echo $this->lang->line("registration_menu"); ?>
         </span>
         <span class="selected">
         </span>
     </a>
 </li>-->
            <!--registration end-->

            <!--log start-->
            <!--            <?php
            // if($page == 'log')
//                                {
//                                    echo '<li class="start active">';
//                                }
//                                else
//                                {
//                                echo '<li class="start">';
//                                } 
            ?>
                       
                            <a href="<?php //echo base_url();      ?>log">
                                <i class="fa fa-home"></i>
                                <span class="title">
            <?php //echo $this->lang->line("logs_menu");  ?>
                                </span>
                                <span class="selected">
                                </span>
                            </a>
                        </li>-->
            <!--log end-->

            <!--				<li>
                                                    <a href="javascript:;">
                                                            <i class="fa fa-file-text"></i>
                                                            <span class="title">
                                                                    Portlets
                                                            </span>
                                                            <span class="arrow ">
                                                            </span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                            <li>
                                                                    <a href="portlet_general.html">
                                                                             General Portlets
                                                                    </a>
                                                            </li>
                                                            <li>
                                                                    <a href="portlet_ajax.html">
                                                                             Ajax Portlets
                                                                    </a>
                                                            </li>
                                                            <li>
                                                                    <a href="portlet_draggable.html">
                                                                             Draggable Portlets
                                                                    </a>
                                                            </li>
                                                    </ul>
                                            </li>-->
            <!--				<li>
                                                    <a href="javascript:;">
                                                            <i class="fa fa-map-marker"></i>
                                                            <span class="title">
                                                                    Maps
                                                            </span>
                                                            <span class="arrow ">
                                                            </span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                            <li>
                                                                    <a href="maps_google.html">
                                                                             Google Maps
                                                                    </a>
                                                            </li>
                                                            <li>
                                                                    <a href="maps_vector.html">
                                                                             Vector Maps
                                                                    </a>
                                                            </li>
                                                    </ul>
                                            </li>-->
            <!--				<li class="last ">
                                                    <a href="charts.html">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                            <span class="title">
                                                                    Visual Charts
                                                            </span>
                                                    </a>
                                            </li>-->
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>