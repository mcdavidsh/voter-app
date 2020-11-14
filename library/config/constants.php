<?php
//Site Info
$sitename = 'INEC';
$pageTitle =
    ucwords(str_replace(array('-', '/', '.php'), array(' '), basename($_SERVER['PHP_SELF']))).' | '.' '.$sitename;
$breadcrumb =
    ucwords(str_replace(array('-', '/', '.php'), array(' '), basename($_SERVER['PHP_SELF'])));
$favico ='library/assets/home/img/page/default/favico.png';
$favico_app ='../../library/assets/home/img/page/default/favico.png';

//Default Home
$sitelogo = '<img src="library/assets/home/img/page/default/logo.png" class="vt-logo"> ';

//App Panel
$sitelogo_app = '<img src="../../library/assets/home/img/page/default/logo.png" class="vt-logo"> ';
$user_avatar ='../../library/assets/app/assets/images/pages/voter/avatar.png';

//Home Links
$homepage = 'index.php';
$preloader = '<div id="loader" class="loader">
    <div class="plane-container">
        <div class="l-s-2 blink">LOADING.....</div>
    </div>
</div>';
$voterlogin = 'login.php';
$voterreg = 'register.php';
$voterrecovery = 'forgot-password.php';

//Voter Links
$vtlogin = isset($_SESSION['vtlogin']);
$dash = 'dashboard.php';
$vote ='vote.php';
$profile ='profile.php';
$status_comp ='status.php';
$exit ='logout.php';

//Contestant Links
$ctlogin = isset($_SESSION['ctlogin']);

//Admin Links
$adlogin = isset($_SESSION['adlogin']);
$contestcat = 'contest-category.php';
$electionst = 'election.php';
$partycat = 'party.php';
$news = 'news.php';
$adminprofile = 'admin.php';
$contestprofile = 'contestants.php';
$votersprofile = 'voters.php';
$votes = 'votes.php';
$settings = 'profile.php';





?>