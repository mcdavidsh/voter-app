<?php
include "library/config/dbconn.php";
include "library/config/constants.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    echo "<title>$sitename</title>";
    include "library/include/home/header.php";
    ?>
</head>
<body>
<!-- Pre loader-->
<?php echo $preloader; ?>

<div class="nav-absolute nav-fixed">
    <!-- Header -->
    <nav class="mainnav navbar navbar-default justify-content-between">
       <div class="container relative">
           <a class="navbar-brand text-white text-center d-block align-top" href="index.php">
              <?php echo $sitelogo?>
<!--               <span class="h2 ml-1">INEC</span>-->
           </a>
           <div class="paper_menu ">
               <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                   <ul class="dl-menu">

                       <li class="text-success"><a href="app/index.php" class="py-2 btn btn-light btn-block"><span class="text-success">Login</span></a></li>
                   </ul>
               </div>
           </div>
       </div>
    </nav>
</div>
<!-- Hero -->
<section class="search-section product-head vt-banner">
    <div class="text-center p-t-b-40">
        <div class="container">
            <h1>Election in Nigeria is Now Digital</h1>
            <p>Encouraging Nigerians to Participate in Voting.</p>
        </div>
    </div>
</section>
<section class="contactBar vt-bar">
    <div class="container">
        <div class="row contacts shadow py-4">
            <div class="col-md-3 col-sm-12">
                <a href="<?php echo $voterlogin;?>" class="btn btn-success">VOTE</a>
            </div>
            <div class="col-md-3 col-sm-4">
                <a href="#">
                <i class="icon icon-desktop2"></i>
                News</a>
            </div>
            <div class="col-md-3 col-sm-4">
                <i class="icon icon-settings"></i>
                <a>About</a>
            </div>
            <div class="col-md-3 col-sm-12">
<!--                <a href="#" href="#" class="btn btn-success">REGISTER</a>-->
                <div class="dropdown">
                    <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        REGISTER
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo $voterreg;?>">Voter</a>
                        <a class="dropdown-item" href="#">Contestant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "library/include/home/footer.php"?>
