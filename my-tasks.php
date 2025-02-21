<?php include 'header.php';
// error_reporting(E_ALL);
$username = $_COOKIE['jobhub-username'];
if ($username == "") echo "<meta http-equiv='refresh' content='0;url=/index.php'>";
$tasksJson = json_decode(file_get_contents("my-tasks.json"), 1);
$task = $tasksJson[$username];
?>
<div class="headerbg">
    <div class="col-md-12" align="center">
        <h1 style="font-size: 2rem">My Tasks</h1>
    </div>
</div>
<style type="text/css">
    .confirmation__invitee-avatar {
        border-radius: 50%;
        margin-top: 0.75rem;
        z-index: 0;
        position: relative;
        width: 100px;
        height: 100px;
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
    }

    .colr12emovespace {

        margin-bottom: 0.4em !important;
        padding: 0px !important;


    }

    .colrm6space {

        margin: 0px !important;
        padding: 0px !important;

    }

    .subheadclr {

        color: #555;
        font-weight: 600;
    }

    .iconclr {

        color: var(--primary-color);

    }
</style>



<div class="container">

    <div class="col-md-12" style="padding: 0px !important;">
        <div class="row">


            <div class=" height30"></div>
            <div id="exTab2" class="container">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#pending" data-toggle="tab">Pending Task</a>
                    </li>
                    <li><a href="#processing" data-toggle="tab">Processing Task</a>
                    </li>
                    <li><a href="#completed" data-toggle="tab">Completed Task</a>
                    </li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane <?php echo ($task['type'] == 'pending') ? 'active' : ''; ?>"
                        id="<?php echo $task['type'] ?>">

                        <div class="tr-col--centered tr-col-12">
                            <div class="row booking_page">
                                <div class="shop_pic col-md-2" align="center">

                                    <div class="media--figure" align="center">

                                        <img class="confirmation__invitee-avatar"
                                            src="https://i.ibb.co/8Y24kLq/Keanu-Reeves.webp" alt="Profile Photo"
                                            align="middle">

                                        <p class="iconclr">Carpenter </p>

                                    </div>

                                </div>

                                <div class="col-lg-6" style="padding-right: 0px !important;">

                                    <div class="col-md-12">

                                        <h3 class="sv_shop_style"><a href="/vendor/aalvin" target="_blank">Bobby</a>
                                        </h3>

                                        <div class="col-md-12 colr12emovespace">
                                            <div class="col-md-5 colrm6space"><i class="fa fa-calendar"></i> <span
                                                    class="subheadclr">Booking
                                                    Date : </span></div>

                                            <div class="col-md-7 colrm6space"><?php echo $task['bDate'] ?></span>

                                                01:30 PM</div>
                                        </div>

                                        <div class="col-md-12 colr12emovespace">

                                            <div class="col-md-5 colrm6space"><i class="fa fa-map-marker"></i> <span
                                                    class="subheadclr">Booking
                                                    Address : </span>

                                            </div>
                                            <div class="col-md-7 colrm6space">
                                                <?php echo $task['bAddress'] ?>
                                            </div>
                                        </div>

                                        <div class="col-md-12 colr12emovespace">

                                            <div class="col-md-5 colrm6space"><i class="fa fa-clock-o"></i> <span
                                                    class="subheadclr">Booking
                                                    Hours : </span> </div>

                                            <div class="col-md-7 colrm6space"><?php echo $task['bSize'] ?></div>

                                        </div>

                                        <div class="col-md-12 colr12emovespace">

                                            <div class="col-md-5 colrm6space"><span class="subheadclr">Booking Id :
                                                </span>

                                            </div>
                                            <div class="col-md-7 colrm6space"> <?php echo $task['id'] ?>
                                            </div>

                                        </div>

                                        <div class="col-md-12 colr12emovespace">

                                            <div class="col-md-5 colrm6space"><span class="subheadclr">Total Price - :
                                                </span>

                                            </div>

                                            <div class="col-md-7 colrm6space"><span class="iconclr">
                                                    510
                                                </span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-4 book_content">

                                    <div class="col-md-12 colr12emovespace">

                                        <div class="col-md-6" style="padding: 0px !important; margin: 0px !important;">
                                            <span class="subheadclr">Payment Method : </span>
                                        </div>

                                        <div class="col-md-6" style="padding: 0px !important; margin: 0px !important;">
                                            wallet</div>
                                    </div>

                                    <div class="col-md-12 colr12emovespace">

                                        <div class="col-md-6 colrm6space"><span class="subheadclr">Payment Status :
                                            </span></div>

                                        <div class="col-md-6 colrm6space">
                                            <span style="color:green">paid</span>
                                            <span style="color:red"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12 colr12emovespace">

                                    </div>

                                    <div class="col-md-12 colr12emovespace">
                                        <div>
                                            <div class="">

                                            </div>

                                            <div style="margin-top:10px;">

                                                <!--<div class="total-price radiusoff">Total Price - 64.8&nbsp;USD</div>-->

                                                <div style="clear:both; height:10px;"></div>

                                                <div>
                                                    <span class="subheadclr">Service Status :</span>
                                                    <span style="color:blue">Awaiting completion</span>

                                                </div>
                                                <div style="clear:both; height:10px;"></div>
                                                <div style="margin-bottom:10px;">

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                    <?php
                    $types = ['processing', 'pending', 'completed'];
                    foreach ($types as $type) {
                        if ($type != $task['type']) {
                            echo '<div class="tab-pane ' . ($type == 'pending' ? 'active' : '') . '" id="' . $type . '">
                                    <div class="tr-col--centered tr-col-12">
                                        <div class="col-md-12" align="center" style="padding:1em 0 1em 0">No order found!
                                        </div>
                                    </div>
                                </div>';
                        }
                    }
                    ?>

                </div>


            </div>

        </div>



    </div>


    <?php include "footer.php"; ?>