<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone"></div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
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
           <!-- Buildings -->
        <?php
            if ($page == 'buildings') {
                echo '<li class="start active">';
            } else {
                echo '<li class="start">';
            }
            ?>
            <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-building-o"></i>
                <span class="title">
                    <?php echo $this->lang->line("building_menu"); ?>
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

     </a>
        </li>

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
    </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>