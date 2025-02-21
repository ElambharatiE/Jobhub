<?php include "header.php";
$username = $_COOKIE['jobhub-username'];
$bAddress = $_POST['book_address'];
if ($bAddress == "" || $username == "") echo "<meta http-equiv='refresh' content='0;url=/index.php'>";
$bDate = $_POST['booking-date'];
$phone = $_POST['phone'];
$conn = mysqli_connect("localhost", "sql_noorlibas_sh", "akdevpro@786", "sql_noorlibas_sh");
$email = mysqli_fetch_all(mysqli_query($conn, "SELECT `email` FROM users WHERE username='$username'"))[0][0];
$taskDesc = $_POST['taskdescription'];
$bSize = $_POST['estimatehr'];
$tasksJson = json_decode(file_get_contents("my-task.json"), 1);
$tasksJson[$username]['type'] = 'pending';
$tasksJson[$username]['id'] = rand(111, 999);
$tasksJson[$username]['bDate'] = $bDate;
$tasksJson[$username]['bAddress'] = $bAddress;
$tasksJson[$username]['taskDesc'] = $taskDesc;
$tasksJson[$username]['bSize'] = $bSize;
$tasksJson[$username]['email'] = $email;
file_put_contents("my-tasks.json", json_encode($tasksJson, JSON_PRETTY_PRINT));
echo "<meta http-equiv='refresh' content='2;url=/index.php'>";
?>


<div class="video">
    <!--<div class="clearfix sv_mob_clearfix"></div>-->
    <div class="headerbg">
        <div class="col-md-12" align="center">
            <h1>PAYMENT SUCCESS</h1>
        </div>
    </div>
    <div class="container">

        <div class="height30"></div>
        <div class="row">

            <div class="container text-center">
                <h2>Your payment has been successful.</h2>
            </div>

        </div>

    </div>
</div>

<?php include "footer.php" ?>