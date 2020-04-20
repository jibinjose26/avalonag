<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard Avalon AG CMS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="<?php echo base_url();?>/assets/image/png" sizes="16x16" href="<?php echo base_url();?>/assets/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="<?php echo base_url();?>/assets/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url();?>/assets/plugins/summernote/dist/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="<?php echo base_url();?>/assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo" ><strong><b>
							<a href="<?php echo base_url();?>Private_area/dashboardpage"> <font color="black">Assembly of God </font>
                    
                </a></b></strong>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>


                </div>

                <div class="header-right">

                    <ul class="clearfix">
                                
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="<?php echo base_url();?>/assets/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                     
                                        <li><a href="<?php echo site_url('Private_area/logout');?>"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                        	<li><a href="<?php echo site_url('Home_controller/index');?>">Home Page</a></li>
                            <li><a href="<?php echo site_url('Home_gallery_controller/index');?>">Home Gallery</a></li>
                            <li><a href="<?php echo site_url('Private_area/index');?>">About Page</a></li>
                            <li><a href="<?php echo site_url('Contact_controller/index');?>">Contact Page</a></li>
                            <li><a href="<?php echo site_url('Event_controller/index');?>">Event Page</a></li>
                            <li><a href="<?php echo site_url('Contact_controller/user_registration_list');?>">Event Registration</a></li>
                            <li><a href="<?php echo site_url('Contact_controller/donors_details_list');?>">Donation</a></li>
                            
                        </ul>
                    </li>
                    
              </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
<?php $this->load->view($view_page);?>
        

              
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Avalon Assembly of God 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?php echo base_url();?>/assets/plugins/common/common.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/custom.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/settings.js"></script>
    <script src="<?php echo base_url();?>/assets/js/gleek.js"></script>
    <script src="<?php echo base_url();?>/assets/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="<?php echo base_url();?>/assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="<?php echo base_url();?>/assets/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="<?php echo base_url();?>/assets/plugins/d3v3/index.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/topojson/topojson.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="<?php echo base_url();?>/assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="<?php echo base_url();?>/assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="<?php echo base_url();?>/assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="<?php echo base_url();?>/assets/js/dashboard/dashboard-1.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/summernote/dist/summernote.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/summernote/dist/summernote-init.js"></script>

    <script src="<?php echo base_url();?>/assets/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

<script>  

    $(document).ready(function() 
     {
         $('#summernote_vision').summernote({
            height: 500
        });
         $('#summernote_mission').summernote({
            height: 500
        });
          $('#summernote_events').summernote({
            height: 500
        });
           $('#summernote_home').summernote({
            height: 500
        });

    });

</script>


</body>

</html>
