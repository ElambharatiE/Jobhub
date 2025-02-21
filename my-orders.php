<?php include "header.php";
$username = $_COOKIE['jobhub-username'];
if ($username == "") echo "<meta http-equiv='refresh' content='0;url=/index.php'>";
$tasksJson = json_decode(file_get_contents("my-tasks.json"), 1) ?? [];
$pendingOrders = array_filter($tasksJson, function ($arr) {
    return $arr['type'] == 'pending';
});
$processingOrders = array_filter($tasksJson, function ($arr) {
    return $arr['type'] == 'processing';
});
$completedOrders = array_filter($tasksJson, function ($arr) {
    return $arr['type'] == 'completed';
});
?>

<link rel="stylesheet" type="text/css" href="https://demowpthemes.com/buy2tasky/css/application.css">
 <link rel="stylesheet" type="text/css" href="https://demowpthemes.com/buy2tasky/css/account.css">
 
<div class="video">
    <div class="headerbg">
        <div class="col-md-12" align="center">
            <h1>My Orders</h1>
        </div>
    </div>

    <div class="height30"></div>

    <div id="exTab2" class="container">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#1" data-toggle="tab">Pending Task</a>
            </li>

            <li><a href="#2" data-toggle="tab">Processing Task</a>
            </li>

            <li><a href="#3" data-toggle="tab">Completed Task</a>
            </li>

        </ul>

        <div class="tab-content" style="padding-top: 2em;">
            <div class="tab-pane active" id="1">

                <div class="col-md-12 service_style" style="padding: 0px !important;">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover datatable" data-page-length='5'
                            width="98%">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <!--<th>Shop Name</th>-->
                                    <th>Services Name</th>
                                    <th>Booking Date</th>
                                    <th>Booking Note</th>
                                    <th>Username</th>
                                    <th>User Email</th>
                                    <th>Total Amount</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($pendingOrders as $user => $order) { ?>
                                    <tr>
                                        <td><?php echo $order['id']; ?></td>
                                        <td>Carpenter</td>
                                        <td><?php echo $order['bDate']; ?></td>
                                        <td><?php echo $order['taskDesc']; ?></td>
                                        <td><?php echo $user ?></td>
                                        <td><?php echo $order['email']; ?></td>
                                        <td>510</td>
                                        <td>Completed</td>
                                        <td
                                            style='display: flex; align-items: center; justify-content: center; flex-direction: column;gap:5px;'>
                                            <button style='padding:5px 10px;'
                                                onclick="fetch(`accept-order.php?id=<?php echo $user; ?>`).then(()=>{setTimeout(()=>{window.location.reload()}, 1000);});"
                                                class='btn btn-primary'>Accept
                                                Task</button>
                                            <button style='padding:5px 10px;'
                                                onclick="return confirm('Are you sure you want to do this?');"
                                                class="btn btn-danger">Cancel Task</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="2">
                <div class="col-md-12 service_style" style="padding: 0px !important;">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover datatable" data-page-length='5'
                            width="98%">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <!--<th>Shop Name</th>-->
                                    <th>Services Name</th>
                                    <th>Booking Date</th>
                                    <th>Booking Note</th>
                                    <th>Username</th>
                                    <th>User Email</th>
                                    <th>Phone No</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($processingOrders as $user => $order) { ?>
                                    <tr>
                                        <td><?php echo $order['id']; ?></td>
                                        <td>Carpenter</td>
                                        <td><?php echo $order['bDate']; ?></td>
                                        <td><?php echo $order['taskDesc']; ?></td>
                                        <td><?php echo $user ?></td>
                                        <td><?php echo $order['email']; ?></td>
                                        <td>510</td>
                                        <td>Started</td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="3">
                <div class="col-md-12 service_style" style="padding: 0px !important;">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover datatable" data-page-length='5'
                            width="98%">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <!--<th>Shop Name</th>-->
                                    <th>Services Name</th>
                                    <th>Booking Date</th>
                                    <th>Booking time</th>
                                    <th>Booking Note</th>
                                    <th>Username</th>
                                    <th>User Email</th>
                                    <th>Phone No</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <!--<th>Reject</th>-->
                                    <th>Service Complete?</th>

                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#media').carousel({
            pause: true,
            interval: false,
        });
    });
</script>
<?php include "footer.php" ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.datatable').DataTable({

        });
    });
</script>