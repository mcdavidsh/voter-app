<?php
session_start();
include "../../library/config/dbconn.php";
include "../../library/config/constants.php";

if(strlen($vtlogin)==0)
{
    header("location:../../login.php");
}
else
{
$status =1;
$query_value = "select * from voters where profile=$status and (email='".$_SESSION['vtlogin']."' or phone='".$_SESSION['vtlogin']."')" ;
$query = mysqli_query($con,$query_value);
$row=mysqli_fetch_array($query);

if ($row['profile']== NULL or $row['profile']==""){

    header("location:complete-profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include "../../library/include/app/header.php";
    ?>
</head>
<body>
<div class="app app-default">

    <?php include "../../library/include/app/nav.php"; ?>

    <div class="app-container">

        <?php include "../../library/include/app/topnav.php"; ?>

        <div class="row">
            <div class="col-xs-12">
                <div class="timeline">
                    <div class="content-heading __center">
                        <div class="title">Active Elections</div>
                        <div class="description">These are elections that you can particpate in</div>
                    </div>
                    <dl>
                        <?php
                        $query = mysqli_query($con,"select * from contestcat");
                        while($rows=mysqli_fetch_array($query)){
                            ?>
                            <?php
                            $id = $rows['id'];
                            $catnam=$rows['catname'];
                            $stats=$rows['status'];
                            if ($stats==0) {
                                echo "<dt class='disabled item pos-right'>
                               <div class='marker-danger'></div>
                                <div class='event'>
                                    <div class='event-body'>
                                     $catnam 
                                    </div>
                                </div>
                            </dt>";} else {

                            echo"

<dt class= 'item'>
                                <div class='marker'></div>
                                <div class='event' style='cursor:pointer;'>
                                    <div class='event-body'>
                                 <a class='text-dark h4' href='vote-details.php?id=$id'>$catnam
                                 <div class='label label-warning pull-right' style='margin-left: 5px;'> $stats Votes</div>
                                 <div class='label label-primary pull-right'> $stats Contestants</div>
                                </a>
                                    </div>
                                </div>
                            </dt>";}
                            ?>
                        <?php }?>
                    </dl>

                </div>
            </div>
        </div>

        <div class="row">

                   <div class="col-xs-12">
                       <div class="title h3 disabled p-b-40">Active Election</div>
                       <?php
                       $query = mysqli_query($con,"select * from contestcat");
                       while($rows=mysqli_fetch_array($query)){
                       ?>
            <div class="col-md-4">

                <div class="card card-mini shadow vt-card">

                    <a href="#">

                    <div class="text-center vt-card-img" >
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item vt-carousel-item active">

                                    <img src="../../library/assets/app/uploads/<?php echo $row['partylogo'];?>" class="d-block w-100" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-body text-center">
                        <div class="vt-vote-cat"><?php echo $rows['catname'];?></div> <span class="label label-success d-block p"><?php echo $rows['status'];?></span>
                    </div
                    </a>
                </div>

            </div>
                       <?php }?>
           </div>

        </div>


        <?php include "../../library/include/app/footer.php" ?>
<?php }?>

