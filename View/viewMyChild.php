

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="../css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='../css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->

 <!-- js-->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- chart -->
<script src="../js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<link href="../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="../js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

  <!-- requried-jsfiles-for owl -->
          <link href="../css/owl.carousel.css" rel="stylesheet">
          <script src="../js/owl.carousel.js"></script>
            <script>
              $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                  items : 3,
                  lazyLoad : true,
                  autoPlay : true,
                  pagination : true,
                  nav:true,
                });
              });
            </script>
          <!-- //requried-jsfiles-for owl -->
</head>
<body class="cbp-spmenu-push">
  <div class="main-content">
  <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Nursery<span class="dashboard_text">El Gamdeen</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN </li>
              <li class="treeview">
                <a href="index.html">
                <i class="fa fa-dashboard"></i>
                <span>Insert</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="grids.html"><i class="fa fa-angle-right"></i> ADD Child</a></li>
                  <li><a href="media.html"><i class="fa fa-angle-right"></i> ADD Parent</a></li>
                  <li><a href="media.html"><i class="fa fa-angle-right"></i> ADD Employee</a></li>
                </ul>
              </li>
        <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Delete</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="grids.html"><i class="fa fa-angle-right"></i> Delete Child</a></li>
                  <li><a href="media.html"><i class="fa fa-angle-right"></i> Delete Parent</a></li>
                  <li><a href="media.html"><i class="fa fa-angle-right"></i> Delete Employee</a></li>
                </ul>
          </li>
          <li class="treeview">
                  <a href="#">
                  <i class="fa fa-laptop"></i>
                  <span>View</span>
                  <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="listview.php"><i class="fa fa-angle-right"></i> View Child</a></li>
                    <li><a href="listparent.php"><i class="fa fa-angle-right"></i> View Parent</a></li>
                    <li><a href="listemployee.php"><i class="fa fa-angle-right"></i> View Employee</a></li>
                  </ul>
            </li>
              <li class="treeview">
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Edit</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="general.html"><i class="fa fa-angle-right"></i> Edit Child</a></li>
                  <li><a href="icons.html"><i class="fa fa-angle-right"></i> Edit Parent</a></li>
                  <li><a href="buttons.html"><i class="fa fa-angle-right"></i> Edit Employee</a></li>
                </ul>
              </li>
        <li>
                <a href="widgets.html">
                <i class="fa fa-th"></i> <span>Schedules</span>

                </a>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
                  <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox </span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                <ul class="treeview-menu">
                  <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                  <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
                  <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
                  <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                  <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
                  <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
                </ul>
              </li>
              <li class="header">LABELS</li>
              <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
  </div>
    <!--left-fixed -navigation-->

    <!-- header-starts -->
    <div class="sticky-header header-section ">
      <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->

        <!--notification menu end -->


        <!--search-box-->
        <div class="search-box">
          <form class="input">
            <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
            <label class="input__label" for="input-31">
              <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
              </svg>
            </label>
          </form>
        </div><!--//end-search-box-->

        <div class="profile_details">
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img">
                  <span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
                  <div class="user-name">
                    <p>Admin Name</p>
                    <span>Administrator</span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>
                </div>
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
                <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
                <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
    <div id="page-wrapper">
      <div class="main-page">
        <div class="tables">
<div class="bs-example widget-shadow" data-example-id="hoverable-table">
  <h4>CHILD LIST</h4>

  <table class="table table-hover">
     <thead>
       <tr>
         <th scope="col">Name</th>
         <th scope="col">ChildID</th>
         <th scope="col">DateOfBirth</th>
         <th scope="col">DateOfEnrollment</th>
         <th scope="col">AllergyType </th>
         <th scope="col">GroupName</th>
         <th scope="col">Religion</th>
         <th scope="col">Nationality</th>
         <th scope="col">Gender</th>
         <th scope="col">User Type </th>
         <th scope="col"></th>
           </tr>
           <?php
             include "../Model/childclass.php";
             $Class = new child;
             $i= $Class->ChildOfTheParent();
              for($x=0;$x<=$i;$x++){
               echo "<tr>";

               echo "<td>".$Class->Name[$x]."</td>";

               echo "<td>".$Class->ChildID[$x]."</td>";

               echo "<td>".$Class->DateOfBirth[$x]."</td>";

               echo "<td>".$Class->DateOfEnrollment[$x]."</td>";

               echo "<td>".$Class->AllergyType[$x]."</td>";

               echo "<td>".$Class->GroupName[$x]."</td>";

               echo "<td>".$Class->Religion[$x]."</td>";

               echo "<td>".$Class->Nationality[$x]."</td>";

               echo "<td>".$Class->Gender[$x]."</td>";

               echo "<td>".$Class->user_type[$x]."</td>";

               echo "<td><a href=\"Running.php?id=".$Class->ChildID[$x]."\" class=\"btn btn-primary\">Payment</a></td>";
               echo"</tr>";
             }


           ?>
         </thead>
         <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>

  </div>
  <div class="footer">
   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
  </div>
    <!--//footer-->
  </div>

  <!-- side nav js -->
  <script src='../js/SidebarNav.min.js' type='text/javascript'></script>
  <script>
  $('.sidebar-menu').SidebarNav()
  </script>
  <!-- //side nav js -->

  <!-- Classie --><!-- for toggle left push menu script -->
  <script src="../js/classie.js"></script>
  <script>
  var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
    showLeftPush = document.getElementById( 'showLeftPush' ),
    body = document.body;

  showLeftPush.onclick = function() {
    classie.toggle( this, 'active' );
    classie.toggle( body, 'cbp-spmenu-push-toright' );
    classie.toggle( menuLeft, 'cbp-spmenu-open' );
    disableOther( 'showLeftPush' );
  };

  function disableOther( button ) {
    if( button !== 'showLeftPush' ) {
      classie.toggle( showLeftPush, 'disabled' );
    }
  }
  </script>
  <!-- //Classie --><!-- //for toggle left push menu script -->

  <!--scrolling js-->
  <script src=".//js/jquery.nicescroll.js"></script>
  <script src="../js/scripts.js"></script>
  <!--//scrolling js-->

  <!-- Bootstrap Core JavaScript -->
  <script src="../js/bootstrap.js"> </script>

  </body>
  </html>
