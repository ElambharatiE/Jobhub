<style>
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
<div class="register-page">
    <?php
    error_reporting(0);

    if (isset($_POST['submit'])) {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phoneno'];
        $location = $_POST['location'];
        $conn = mysqli_connect("localhost", "sql_noorlibas_sh", "akdevpro@786", "sql_noorlibas_sh");
        $sql = "SELECT * FROM `users` WHERE `username`='$username'";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
            echo "<script>showFailure(`Username already exists!`);</script>";
        } else {
            $sql1 = "INSERT INTO users (`username`, `email`, `password`, `phone`, `type`,  `location`) VALUES ('$username', '$email', '$password', '$phone', 'tasker',  '$location')";
            mysqli_query($conn, $sql1);
            echo "<script>showSuccess(`User Registered Successfully!`); setTimeout(()=>{window.location.href='login.php';}, 1000);</script>";
        }
    }

    ?>



    <style type="text/css">
        .button-wrap {
            position: relative;
            text-align: center;
            top: 50%;
            /*margin-top: -2.5em;*/
        }

        @media (max-width: 40em) {
            .button-wrap {
                margin-top: -1.5em;
            }
        }

        .button-label {
            display: inline-block;
            padding: 1em 2em;
            margin: 0.5em;
            cursor: pointer;
            color: #4e4d4d;
            border-radius: 0.25em;
            border: 1px solid #51af33;
            font-size: 15px;
            /*background: #efefef;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.22);*/
            transition: 0.3s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .button-label h1 {
            font-size: 1em;
            font-family: "Lato", sans-serif;
        }

        .button-label:hover {
            background: #51af33;
            color: #fff;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.32);
        }

        .button-label:active {
            transform: translateY(2px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0px -1px 0 rgba(0, 0, 0, 0.22);
        }

        @media (max-width: 40em) {
            .button-label {
                padding: 0em 1em 3px;
                margin: 0.25em;
            }
        }

        #yes-button:checked+.button-label {
            background: #51af33;
            color: #fff;
        }

        #yes-button:checked+.button-label:hover {
            background: #51af33;
            color: #fff;
        }

        #no-button:checked+.button-label {
            background: #51af33;
            color: #fff;
        }

        #no-button:checked+.button-label:hover {
            background: #51af33;
            color: #fff;
        }

        #maybe-button:checked+.button-label {
            background: #4183D7;
            color: #efefef;
        }

        #maybe-button:checked+.button-label:hover {
            background: #2c75d2;
            color: #e2e2e2;
        }

        .hidden {
            display: none;
        }

        .borbtnsin {

            width: 220px;
            padding: 1em;
            border: 1px solid #FB8C00;
            background: #FB8C00;
            border-radius: 4px;
            color: #fff !important;

        }


        .button-label1 {
            display: inline-block;
            padding: 1em 2em;
            margin: 0.5em;
            cursor: pointer;
            color: #fff;
            border-radius: 0.25em;
            border: 1px solid #51af33;
            font-size: 15px;
            /*background: #efefef;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.22);*/
            transition: 0.3s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .button-label1 h1 {
            font-size: 1em;
            font-family: "Lato", sans-serif;
        }

        .button-label1:hover {
            background: #51af33;
            color: #fff;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.32);
        }

        .button-label1:active {
            transform: translateY(2px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0px -1px 0 rgba(0, 0, 0, 0.22);
        }

        @media (max-width: 40em) {
            .button-label1 {
                padding: 0em 1em 3px;
                margin: 0.25em;
            }
        }

        #yes-button1:checked+.button-label1 {
            background: #51af33;
            color: #fff;
        }

        #yes-button1:checked+.button-label1:hover {
            background: #51af33;
            color: #fff;
        }

        #no-button1:checked+.button-label1 {
            background: #51af33;
            color: #fff;
        }

        #no-button1:checked+.button-label1:hover {
            background: #51af33;
            color: #fff;
        }

        #maybe-button1:checked+.button-label1 {
            background: #4183D7;
            color: #efefef;
        }

        #maybe-button1:checked+.button-label1:hover {
            background: #2c75d2;
            color: #e2e2e2;
        }
    </style>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="ZuHXf7fuFYJUznBz4sG6CSmUbhRwCLcB0ff8Njp6">

        <title>Jobhub - register</title>

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

            <title>Jobhub - register</title>
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
            <script src="https://www.google.com/recaptcha/api.js?" async defer></script>


            <script src="js/jquery-validation.js" type="text/javascript"></script>
            <script src="js/jquery-validationcode.js" type="text/javascript"></script>

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

            <script type="text/javascript">
                //var j = jQuery.noConflict();
                $(document).ready(function() {

                    jQuery.validator.addMethod("lettersonly", function(value, element) {
                        return this.optional(element) || /^[a-z\s]+$/i.test(value);
                    }, "Only alphabetical characters");

                    $("#signin").validate({

                        rules: {

                            name: {

                                lettersonly: true
                            },

                            password: {

                                minlength: 8
                            },

                            password_confirmation: {
                                equalTo: "#password"
                            },

                            phoneno: {

                                minlength: 7,
                                maxlength: 20
                            },
                            location: {

                            }

                        }

                    });
                });
            </script>

            <style type="text/css">
                .error {

                    color: red;

                }


                .help-block {
                    color: red;
                    margin-top: 30px;
                }
            </style>
            <div class="register-box">
                <div class="register-box-overlay">
                    <div class="panel panel-default">

                        <div class="panel-body text-center">
                            <div class="login-logo text-center">
                            </div>
                            <div class="col-xs-8 col-xs-offset-2" style="padding-right: 10px !important;">

                                <form class="form-horizontal" role="form" id="signin" method="POST"
                                    action="register.php">

                                    <input type="hidden" name="_token"
                                        value="ZuHXf7fuFYJUznBz4sG6CSmUbhRwCLcB0ff8Njp6">

                                    <!-- <div class="button-wrap">
<input class="hidden radio-label" type="radio" name="usertype" id="yes-button" value="0" checked="checked">
<label class="button-label" for="yes-button">
Hire a Tasker
</label>
<input class="hidden radio-label" type="radio" name="usertype" id="no-button" value="2">
<label class="button-label" for="no-button">
Become a Tasker
</label>
</div>-->
                                    <div id='output-box' class="alert text-center"></div>

                                    <input type="hidden" name="usertype" id="usertype" value="0">

                                    <div class="form-group">

                                        <input id="name" type="text" class="form-control input-lg required"
                                            placeholder="Username" name="name" value="">

                                    </div>

                                    <div class="form-group">

                                        <input id="email" type="text" class="form-control input-lg required email"
                                            placeholder="E-Mail Address" name="email" value="">

                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control input-lg required"
                                            placeholder="Password" name="password">

                                    </div>

                                    <div class="form-group">
                                        <input id="password_confirmation" type="password"
                                            placeholder="Confirm new password" class="form-control input-lg"
                                            name="password_confirmation">
                                    </div>

                                    <div class="form-group">
                                        <input id="phoneno" type="text" class="form-control input-lg required phone"
                                            placeholder="Phone No" name="phoneno">
                                    </div>
                                    <div class="form-group">
                                        <input name="location" class="form-control input-lg required location"
                                            id="location" type="text" placeholder="Enter Location" value="">
                                    </div>

                                    <!--<div class="form-group">
							<select name="gender" class="form-control input-lg required">
							  
							  <option value="">Gender</option>
							   <option value="male">Male</option>
							   <option value="female">Female</option>
							</select>
                        </div>-->

                                    <!--<div class="form-group">
                            
                            <input type="radio" name="usertype" id="usertype" value="0" checked="checked">Customer

                            <input type="radio" name="usertype" id="usertype" value="2">Seller
                
                        </div>-->

                                    <div class="form-group">
                                        <button type="submit" name="submit"
                                            class="borbtn-inverse form-control btn btn-lg">
                                            Create account
                                        </button>
                                    </div>
                                    Already have an account?<a class="btn-link" href="login.php">Sign in</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript"
    src='https://maps.google.com/maps/api/js?key=AIzaSyCxsElDokvMkgQAwkQabkhKiytZJO-hIoM&sensor=false&libraries=places'>
</script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', function() {
        var places = new google.maps.places.Autocomplete(document.getElementById('location'));
        google.maps.event.addListener(places, 'place_changed', function() {
            var place = places.getPlace();
            var address = place.formatted_address;
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();

        });
    });
</script>


</body>

</html>