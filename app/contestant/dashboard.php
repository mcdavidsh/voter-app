<?php
session_start();
include "../../library/config/dbconn.php";
include "../../library/config/constants.php";

if(strlen($adlogin)==0)
{
header("location:index.php");
}

else {




$hour      = date('H');
//if ($hour >= 20) {
//    $greetings = "Good Night";
if ($hour > 17) {
    $greetings = "Good Evening";
} elseif ($hour > 11) {
    $greetings = "Good Afternoon";
} elseif ($hour < 12) {
    $greetings = "Good Morning";
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include "../../library/include/app/ad-header.php";
    ?>
</head>
<body>
<div class="app app-default" style="overflow-y: scroll; min-height: 900px ; ">

    <?php include "../../library/include/app/ad-nav.php"; ?>

    <div class="app-container">

        <?php include "../../library/include/app/ad-topnav.php"; ?>

        <!--Notification-->


        <!--    Notification-->

        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                <?php $query=mysqli_query($con,"select fullName from manager where username='".$_SESSION['adlogin']."'");
                               while($row=mysqli_fetch_array($query))
                               {
                                ?>
                                <div class="vt-card-title"><?php echo $greetings;?>,
                                    <?php echo ucwords('Admin' .' '. $row['fullName']);?>
                                    <?php } ?>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5"></div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"  data-toggle="tooltip" data-placement="bottom" title="Election in progress">
                <a class="card">

                    <div class="card-body text-center vt-box">
                        <div class="text-decoration-none">3</div>
                        <div class="text-capitalize ">Total Users</div>
                    </div>
                </a>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a class="card">
                    <div class="card-body text-center vt-box">
                        <div class="text-decoration-none">5</div>
                        <div class="text-capitalize ">Total Voters</div>
                    </div>
                </a>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="This is Elections you have voted in.">
                <a class="card">
                    <div class="card-body text-center vt-box">
                        <div class="text-decoration-none">2</div>
                        <div class="text-capitalize ">Total Contestants</div>
                    </div>
                </a>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="This is Elections you have voted in.">
                <a class="card">
                    <div class="card-body text-center vt-box">
                        <div class="text-decoration-none">3737</div>
                        <div class="text-capitalize ">Total Votes</div>
                    </div>
                </a>

            </div>
        </div>


        <?php include "../../library/include/app/footer.php" ?>
<?php }?>
