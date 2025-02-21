<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);

$username = $_COOKIE['jobhub-username'];
if ($username != "") {
    $conn = mysqli_connect("localhost", "sql_noorlibas_sh", "akdevpro@786", "sql_noorlibas_sh");
    $sql = "SELECT * FROM `users` WHERE `username`='$username'";
    $res = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($res);
    $location = $res['location'];
    $userType = $res['type'];
    $tasksJson = json_decode(file_get_contents("my-tasks.json"), 1);
    $taskCount = $tasksJson[$username] ? "1" : "0";
    if ($tasksJson) $orderCount = count($tasksJson);
}
?>

<head>

    <title>Jobhub - Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="Jobhub, Buy2Jobhub, services, domestic cleaning, cleaning services, delivery services," />
    <meta name="description"
        content="Jobhub is an online service platform that connects service providers with customers. It allows customers to browse and search for services, compare prices and reviews, and book appointments or purchase services directly from the site." />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- css stylesheets -->
    <link rel="icon" type="image/x-icon" href="local/images/settings/1673612010.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/carousel/style.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link href="css/flexslider.css" rel="stylesheet" type="text/css" />

    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--
	<link rel="stylesheet" href="/css/validationEngine.jquery.css" type="text/css"/>
	
	<script src="/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script>
		jQuery(document).ready(function(){
			jQuery("#formID").validationEngine({showOneMessage:true,promptPosition : "topLeft", scroll: false});
		});

		jQuery(document).ready(function(){
			jQuery("#formID2").validationEngine({showOneMessage:true,promptPosition : "topLeft", scroll: false});
		});
	</script>-->

    <link href="css/autocomplete.css" rel="stylesheet" type="text/css">

    <script src="js/jquery-1.10.4.min.js"></script>

    <link href="css/jquery.multiselect.css" rel="stylesheet" type="text/css">

    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="css/jquery-uii.css">

    <link rel="stylesheet" href="css/multiselect/fastselect.min.css">

    <script src="css/multiselect/fastselect.standalone.js"></script>

    <link href="local/resources/assets/DataTables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">



    <link rel="stylesheet" type="text/css" href="pagenavi/style.css" />


    <script type="text/javascript" src="pagenavi/jquery.simplePagination.js"></script>

    <script type="text/javascript" src="local/resources/assets/DataTables/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/dashboard.css">

    <style>
        :root {
            --primary-color: #0D7A5F;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var perPage = 3;
            var opened = 1;
            var onClass = 'on';
            var paginationSelector = '.pagee';
            var defaultSorting = 'ASC';
            $('.pagenavigation').simplePagination(perPage, opened, onClass, paginationSelector);
        });




        $(function() {
            $("#completed_work").change(function() {
                if ($(this).val() == "yes") {
                    $("#gotted_prb").hide();
                } else {
                    $("#gotted_prb").show();

                }
            });
        });


        $(function() {
            $("#got_problem").change(function() {
                if ($(this).val() == "yes") {
                    $("#problemcard").show();
                    $("#complete_wrk").hide();
                } else {
                    $("#problemcard").hide();
                    $("#support-message").hide();
                    $("#complete_wrk").show();
                }
            });
        });



        $(function() {
            $("input[name='reason']").click(function() {
                if ($("#get_help").is(":checked")) {
                    $("#support-message").show();
                    $("#complete_wrk").hide();
                } else {
                    $("#support-message").hide();
                    $("#complete_wrk").hide();
                }
            });
        });
    </script>

    <script type="text/javascript"
        src='https://maps.google.com/maps/api/js?key=AIzaSyCxsElDokvMkgQAwkQabkhKiytZJO-hIoM&sensor=false&libraries=places'>
    </script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function() {
            var places = new google.maps.places.Autocomplete(document.getElementById('txtPlaces'));
            google.maps.event.addListener(places, 'place_changed', function() {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();

            });
        });
    </script> <!-- Proxima Nova reference. -->
    <link as="font" crossorigin="" href="fonts/Proxima&#32;Nova&#32;Alt&#32;Regular-webfont.woff" rel="preload">

    <link as="font" crossorigin="" href="fonts/Proxima&#32;Nova&#32;Alt&#32;Regular-webfont.eot" rel="preload">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <!-- <link href="https://use.typekit.net/emv3zbo.css" rel="stylesheet" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/fontawesome.css"> -->
    <link rel="stylesheet" type="text/css" href="css/solid.css">
    <script type="text/javascript" src="js/slick.min.js"></script>
    <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->


    <style type="text/css">
        .slider {
            width: 100%;
            /*margin: auto;*/
        }

        .slick-slide {
            /*margin: 0px 20px;*/
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            /*transition: all ease-in-out .3s;
      opacity: .2;*/
        }

        .slick-active {
            opacity: 1;
        }

        .slick-current {
            opacity: 1;
        }
    </style>

</head>

<body class="index">



    <!-- fixed navigation bar -->
    <div class="navbar sticky homenav navbar-inverse" role="navigation" align="center">
        <div class="container topbottom">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#b-menu-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="" href="../buy2jobhub.1.html">

                    <img src="local/images/settings/1673520176.png.html" border="0" alt="" />

                </a>
            </div>
            <div class="collapse navbar-collapse" id="b-menu-1">


                <ul class="nav navbar-nav navbar-right sangvish_homepage">
                    <!--<li class="active"><a href="#">Join as a pro</a></li>-->

                    <!--<li class="nav-font"><a href="#location">Location</a></li>-->
                    <li class="dropdown"><a href="../buy2jobhub.1.html#" class="dropdown-toggle"
                            data-toggle="dropdown">All
                            Services<span><i class="fa fa-caret-down dropdown-submenu" aria-hidden="true"
                                    style="text-align:center; padding:0 5px"></i></span></a>
                        <ul class="dropdown-menu dropdown-menuser">
                            <div class="dropdownmenu_scroll">

                                <li><a href="search/15/carpentry-&amp;-construction.html">Carpentry &
                                        Construction</a></li>

                                <li><a href="search/4/cleaning.html">Cleaning</a></li>

                                <li><a href="search/23/computer-help.html">Computer Help</a></li>

                                <li><a href="search/28/decoration-help.html">Decoration Help</a></li>

                                <li><a href="search/20/deep-clean.html">Deep Clean</a></li>

                                <li><a href="search/7/delivery.html">Delivery</a></li>

                                <li><a href="search/8/electrical-help.html">Electrical Help</a></li>

                                <li><a href="search/19/event-staffing.html">Event Staffing</a></li>

                                <li><a href="search/21/full-service-help-moving.html">Full Service Help Moving</a>
                                </li>

                                <li><a href="search/1/furniture-assembly.html">Furniture Assembly</a></li>

                                <li><a href="search/18/furniture-removal.html">Furniture Removal</a></li>

                                <li><a href="search/3/help-moving.html">Help Moving</a></li>

                                <li><a href="search/5/home-repairs.html">Home Repairs</a></li>

                                <li><a href="search/29/interior-design-service.html">Interior Design Service</a>
                                </li>

                                <li><a href="search/25/laundry-help.html">Laundry Help</a></li>

                                <li><a href="search/2/mounting.html">Mounting</a></li>

                                <li><a href="search/9/moving-heavy-furniture-service.html">Moving Heavy Furniture
                                        Service</a></li>

                                <li><a href="search/31/office-administration.html">Office Administration</a></li>

                                <li><a href="search/16/organization.html">Organization</a></li>

                                <li><a href="search/14/packing-&amp;-unpacking.html">Packing & Unpacking</a></li>

                                <li><a href="search/12/painting.html">Painting</a></li>

                                <li><a href="search/17/personal-assistant.html">Personal Assistant</a></li>

                                <li><a href="search/26/photography.html">Photography</a></li>

                                <li><a href="search/11/plumbing.html">Plumbing</a></li>

                                <li><a href="search/30/pressure-washing.html">Pressure Washing</a></li>

                                <li><a href="search/13/running-your-errands.html">Running Your Errands</a></li>

                                <li><a href="search/22/shopping.html">Shopping</a></li>

                                <li><a href="search/27/smart-home-installation.html">Smart Home Installation</a>
                                </li>

                                <li><a href="search/24/wait-in-line.html">Wait in Line</a></li>

                                <li><a href="search/10/yard-work-services.html">Yard Work Services</a></li>
                            </div>
                        </ul>
                    </li>
                    <?php if ($location == "") { ?>
                        <li class="nav-font">
                            <a href="account_create.html"><?php echo $location ??  "Sign up / Login"; ?></a>
                        </li>
                    <?php } else { ?>
                        <li class="dropdown ">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user" aria-hidden="true" style="font-size: 18px; margin-left: 5px"></i>
                                <?php echo $username; ?>
                                <span> <i class="fa fa-caret-down dropdown-submenu" aria-hidden="true"
                                        style="text-align:center; padding:0 5px;"></i></span></a>
                            <ul class="dropdown-menu dropdown-menu1">
                                <li style=' display: flex; align-items: center; justify-content: space-evenly;'>
                                    <a href=""><i class="fa fa-globe" aria-hidden="true" style="font-size: 14px;"></i>
                                        <?php echo $location; ?></a>
                                </li>
                                <li style='display: flex; align-items: center; justify-content: space-evenly;'>
                                    <a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"
                                            style="font-size: 14px; color: red;"></i>
                                        Log out</a>
                                </li>

                            </ul>
                        </li>
                    <?php } ?>

                    <li class="dropdown ">
                        <a href="../buy2jobhub.1.html#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="fa fa-globe" aria-hidden="true" style="font-size: 20px;"></i><span><i
                                    class="fa fa-caret-down dropdown-submenu" aria-hidden="true"
                                    style="text-align:center; padding:0 5px;"></i></span></a>
                        <ul class="dropdown-menu dropdown-menu1">

                            <li><a href="../buy2jobhub.1.html" value="en" class="language_value"> English</a></li>
                            <li><a href="../buy2jobhub.1.html" value="es" class="language_value"> Spanish</a></li>
                            <li><a href="../buy2jobhub.1.html" value="ar" class="language_value"> Arabic</a></li>

                        </ul>
                    </li>

                    <!--<li class="dropdown nav-font">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Language</a>
              	<ul class="dropdown-menu">
              								<li><a href="" value="en" class="language_value"> English</a></li>
											<li><a href="" value="es" class="language_value"> Spanish</a></li>
											<li><a href="" value="ar" class="language_value"> Arabic</a></li>
										
              	</ul>
            </li>-->
                    <style>
                        .taskcount {
                            padding: 5px 8px;
                            border-radius: 50%;
                            background: #ccc;
                            color: #222;
                            font-size: 14px;
                        }
                    </style>
                    <?php if ($location != "") {
                        if ($userType == "user") {
                            echo '<li class="nav-font">
                                <a href="my-tasks.php">My Tasks <span class="taskcount">' . $taskCount . '</span></a>
                            </li>';
                        } else {
                            echo '<li class="nav-font">
                                <a href="my-orders.php">My Orders <span class="taskcount">' . $orderCount . '</span></a>
                            </li>';
                        }
                    } ?>

                    <?php if ($location == "") { ?>
                        <li class="nav-font">
                            <a class="btn btn-small btn-secondary u-hidden--sm u-hidden--md tasker-signup-btn"
                                href="become-a-tasker.html"><span class="nav-btn-font">Become a Tasker</span>
                            </a>
                        </li>
                    <?php } ?>
                    <!--<li><a href="/new-request"  class="borbtn">Post a Job</a></li>-->
                </ul>
            </div> <!-- /.nav-collapse -->
        </div> <!-- /.container -->
    </div> <!-- /.navbar -->

    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>



    <!-- Mobile menu start here -->
    <header class="sv_mob_menu">
        <div id="mySidenav" class="sidenav ">
            <div class="header_part">
                <span class="sv_menu_title">Jobhub</span>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>

            <?php if ($location == "") { ?>
                <a href="register.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Sign Up</a>
                <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
            <?php } else { ?>
                <li class="dropdown ">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user" aria-hidden="true" style="font-size: 18px; margin-left: 5px"></i>
                        <?php echo $username; ?>
                        <span> <i class="fa fa-caret-down dropdown-submenu" aria-hidden="true"
                                style="text-align:center; padding:0 5px;"></i></span></a>
                    <ul class="dropdown-menu dropdown-menu1">
                        <li style=' display: flex; align-items: center; justify-content: space-evenly;'>
                            <a href=""><i class="fa fa-globe" aria-hidden="true" style="font-size: 14px;"></i>
                                <?php echo $location; ?></a>
                        </li>
                        <li style='display: flex; align-items: center; justify-content: space-evenly;'>
                            <a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"
                                    style="font-size: 14px; color: red;"></i>
                                Log out</a>
                        </li>

                    </ul>
                </li>
            <?php } ?>
            <li class="dropdown">
                <a href="../buy2jobhub.1.html#" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="fa fa-globe" aria-hidden="true"></i>Language <i class="fa fa-angle-down"
                        aria-hidden="true"></i></a>
                <ul class="dropdown-menu sv_sub_menu">
                    <li><a href="../buy2jobhub.1.html" value="en" class="language_value">English</a></li>
                    <li><a href="../buy2jobhub.1.html" value="es" class="language_value">Spanish</a></li>
                    <li><a href="../buy2jobhub.1.html" value="ar" class="language_value">Arabic</a></li>
                </ul>
            </li>
            <?php if ($location != "") {
                if ($userType == "user") {
                    echo '<a href="my-tasks.php">My Tasks <span class="taskcount">' . $taskCount . '</span></a>';
                } else {
                    echo '<a href="my-orders.php">My Orders <span class="taskcount">' . $orderCount . '</span></a>';
                }
            } ?>
            <?php if ($location == "") { ?>
                <a href="become-a-tasker.html"><i class="fa fa-user-o" aria-hidden="true"></i>Become a Tasker</a>
            <?php } ?>
            <!--<a href="/new-request"  class="borbtn"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Post a Job</a>-->


        </div>


        <div class="col-md-12">

            <div class="col-md-3" style="float: left;padding-left: 0px;padding-top:0.5em "><span
                    style="font-size:30px;cursor:pointer;color:var(--primary-color)"
                    onclick="openNav()">&#9776;</span></div>

            <div class="col-md-7" style="float:left;margin:0 auto;padding-left: 0px;padding-top:0.5em">

                <a class="" href="../buy2jobhub.1.html">

                    <img src="local/images/settings/1673520176.png.html" border="0" alt=""
                        style="display: block;margin-left: auto;margin-right: auto;" />

                </a>

            </div>

        </div>


        <script type="text/javascript">
            function openNav() {
                alert("das");

                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </header>

    <script>
        // Hide Header on on scroll down
        /*var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250); */

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if (Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight) {
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if (st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }
    </script>

    <script>
        $(window).scroll(function() {
            var sticky = $('.sticky'),
                scroll = $(window).scrollTop();

            if (scroll >= 100) sticky.addClass('fixed');
            else sticky.removeClass('fixed');
        });

        $(".alert-danger").show();
        setTimeout(function() {
            $(".alert-danger").hide();
        }, 5000);

        $(".alert-success").show();
        setTimeout(function() {
            $(".alert-success").hide();
        }, 3000);
    </script>

    <!--<script type="text/javascript">
	$(document).ready(function(){  
	  	var rtl_arabic=$.cookie('language');
	  	if (rtl_arabic == "ar" ){
	  		$("body").addClass("rtl_arabic");

	  		$(".rtl_arabic").attr("dir", "rtl");
	  	} 
	  	else{
	  		$("body").removeClass("rtl_arabic");
	  	}
 	}); 



</script>-->
    <style>
        .dropdownmenu_scroll {

            height: 500px;
            overflow-y: scroll;
            min-width: 210px;
        }

        .dropdownmenu_scroll>li>a {
            display: block;
            padding: 8px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.428571429;
            color: #333;
            white-space: nowrap;
            text-align: left;
        }

        .dropdownmenu_scroll>li>a:hover,
        .dropdownmenu_scroll>li>a:focus {
            color: var(--primary-color);
        }

        .dropdownmenu_scroll>li>a:hover,
        .dropdownmenu_scroll>li>a:focus {
            color: var(--primary-color);
            text-decoration: none;
            background-color: #f5f5f5
        }
    </style>
    <!-- slider -->