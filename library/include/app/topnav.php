<nav class="navbar navbar-default" id="navbar">
    <div class="container-fluid">
        <div class="navbar-collapse collapse in">
            <ul class="nav navbar-nav navbar-mobile">
                <li>
                    <button type="button" class="sidebar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                </li>
                <li class="logo">
                    <a class="navbar-brand" href="<?php echo $homepage; ?>"><?php echo $sitelogo_app;?></a>
                </li>
                <li>
                    <button type="button" class="navbar-toggle">
                        <img class="profile-img" src="<?php echo $user_avatar;?>">
                    </button>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li class="navbar-title"><?php echo $breadcrumb;?></li>
            </ul>

<ul class="nav navbar-nav navbar-center" style="margin-left: 200px; font-size: 15px;">
    <span class="text-danger" style="margin-right: 10px;">Notice: </span>
    <div class="badge badge-success text-center">
        Voter Registration Ends in 65 days
    </div>
</ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                $query=mysqli_query($con,"select fullname from voters where email='".$_SESSION['vtlogin']."' or phone='".$_SESSION['vtlogin']."'");
                while($row=mysqli_fetch_array($query)) {
                ?>
                <div class="title h4 text-capitalize"><?php echo ucwords($row['fullname']); ?></div>
                <?php }?>

                <li class="dropdown profile">
                    <?php
                    $img = mysqli_query($con,"select profilepix from voters where email='".$_SESSION['vtlogin']."' or phone='".$_SESSION['vtlogin']."'");
                    $row=mysqli_fetch_array($img);

                        $userpix = $row['profilepix'];
                        if ($userpix == "") {
                            echo "<a>
                        <img class=\"profile-img\" src=\"$user_avatar\">
                    </a>";
                        } else {
                            echo "<a>
                        <img class=\"profile-img\" src=\"../../library/assets/app/uploads/$userpix\">
                    </a>";
                        }

                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

