<style type="text/css">
    html,
    body {
        height: 100%;
        overflow-x: hidden;
    }
</style>
<div id='output-box' class="alert text-center"></div>
<script>
    function showSuccess(msg) {
        document.querySelector("#output-box").classList.add("alert-success");
        document.querySelector("#output-box").innerHTML = msg;
    }

    function showFailure(msg) {
        document.querySelector("#output-box").classList.add("alert-danger");
        document.querySelector("#output-box").innerHTML = msg;
    }
</script>
<div class="login-page">
    <?php
    error_reporting(0);
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conn = mysqli_connect("localhost", "sql_noorlibas_sh", "akdevpro@786", "sql_noorlibas_sh");
        $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
            $userdata = mysqli_fetch_assoc($res);
            echo "<script>showSuccess(`User Login Successful!`); document.cookie='jobhub-username=$username; SameSite=None; Secure'; setTimeout(()=>{window.location.href='/';}, 1000);</script>";
        } else {
            echo "<script>showFailure(`Username Or Password Wrong!`); </script>";
        }
    }

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="ZuHXf7fuFYJUznBz4sG6CSmUbhRwCLcB0ff8Njp6">

        <title>Jobhub - login</title>

        <link rel="icon" type="image/x-icon" href="local/images/settings/1673612010.png" />

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">


                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>



                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">

                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>


                        <ul class="nav navbar-nav navbar-right">

                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <title>Jobhub - login</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="keywords"
                content="Jobhub, Buy2Jobhub, services, domestic cleaning, cleaning services, delivery services," />
            <meta name="description"
                content="Jobhub is an online service platform that connects service providers with customers. It allows customers to browse and search for services, compare prices and reviews, and book appointments or purchase services directly from the site." />

            <meta name="viewport"
                content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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

            <link href="local/resources/assets/DataTables/css/jquery.dataTables.min.css" rel="stylesheet"
                type="text/css">



            <link rel="stylesheet" type="text/css" href="pagenavi/style.css" />


            <script type="text/javascript" src="pagenavi/jquery.simplePagination.js"></script>

            <script type="text/javascript" src="local/resources/assets/DataTables/js/jquery.dataTables.min.js">
            </script>

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
            </script>
            <script type="text/javascript" src="js/jquery.cookie.min.js"></script><!-- language -->
            <script type="text/javascript" defer="defer">
                //language
                $(document).ready(function() {
                    $(".language_value").click(function() {
                        $.cookie("language", $(this).attr("value"), {
                            path: '/',
                            expires: 365
                        });
                        console.log($.cookie("language"));
                        location.reload();
                    });
                });
            </script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var rtl_arabic = $.cookie('language');
                    if (rtl_arabic == "ar") {
                        $('head').append('<link rel="stylesheet" href="css/rtl.css" type="text/css" />');
                    }
                });
            </script>







            <div class="login-box">
                <div class="login-box-overlay">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="login.php">
                                <div class="login-logo text-center">
                                    <a class="" href="../buy2jobhub.1.html"><img
                                            src="local/images/settings/1673520176.png.html" border="0" alt="" /></a>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-8 col-sm-offset-2 text-center">
                                        <input type="hidden" name="_token"
                                            value="ZuHXf7fuFYJUznBz4sG6CSmUbhRwCLcB0ff8Njp6">
                                        <div id='output-box' class="alert text-center"></div>

                                        <div class="form-group">
                                            <input id="username" type="text" class="form-control input-lg"
                                                placeholder="Username" name="username" value="" required autofocus>

                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control input-lg"
                                                placeholder="Password" name="password" required>

                                        </div>

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> Remember Me
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button name="submit" type="submit"
                                                class="borbtn-inverse form-control btn-lg">
                                                Login
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            <a class="btn-link" href="forgot.html">
                                                Forgot Your Password?
                                            </a><br>
                                            Not Registered? <a class="btn-link" href="register.php">Create an
                                                account </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-12 text-center">
                                    <div class="form-group"><a href="login/facebook.html"><img
                                                src="local/images/button1.png" border="0"></a></div>

                                    <div class="form-group"><a href="login/twitter"><img
                                                src="local/images/button2.png" border="0"></a></div>

                                    <div class="form-group"><a href="login/google"><img
                                                src="local/images/button3.png" border="0"></a></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</div>



</body>

</html>