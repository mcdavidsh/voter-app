<?php
session_start();
include "../../library/config/dbconn.php";
include "../../library/config/constants.php";

if(strlen($adlogin)==0)
{
    header("location:../index.php");
}

else {
    if (isset($_POST['submit'])) {
        $catname= $_POST['title'];
        $catdesc= $_POST['body'];
        $id=intval($_GET['id']);
        $query=mysqli_query($con, "update news set title='$catname', body='$catdesc' where id='$id'");
        if (!$query){
            $errormsg = '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Error updating news. Check and try again</div>';
        }
        else {
            $successmsg = '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>News Successfully updated.</div>';
        }
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
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Edit Contest Category
                        </div>
                    </div> <?php
                    $id=intval($_GET['id']);
                    $cts= mysqli_query($con, "select * from news where id='$id'");
                    while($row = mysqli_fetch_array($cts)){;
                    ?>

                    <div class="card-body">
                        <?php
                        if (isset($successmsg)) {
                            echo $successmsg;
                        }
                        unset($successmsg);
                        ?>
                        <?php
                        if (isset($errormsg)){
                            echo $errormsg;}
                        unset($errormsg);
                        ?>
                        <form class="form-horizontal" method="post">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="form-control-label">Contest Category Name</label>
                                    <input class="form-control" type="text" value="<?php echo $row['title'];?>" placeholder="Enter Category Name" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="form-control-label">Contest Category Name</label>
                                    <textarea class="form-control" rows="8" value="" placeholder="Enter Category Description" name="body"><?php echo $row['body'];?></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success btn-lg">Update</button>

                        </form>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php include "../../library/include/app/footer.php" ?>
        <?php }?>

