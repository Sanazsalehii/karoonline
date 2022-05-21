
<?php

$display_panel = 'none';
$display_open = 'block';
$display_register = 'block';

$modell = new Model();
if($modell->check_log())
{
    $display_panel = 'block';
    $display_open = 'none';
    $display_register = 'none';
}

?>

<!doctype html>
<html lang="en">
<head>
 <title>heading</title>
</head>
<body>

<header id="head-top-menu">
    <div class="row fixed-top" id="navbar-menu">
        <div class="col-lg col-sm" id="navbar">
            <div class="" id="nav">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <button class="navbar-toggler" id="btn-menu"  type="button" data-toggle="collapse" data-target="#FDMainMenu" aria-controls="FDMainMenu" aria-expanded="false" aria-label="نمایش فهرست">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="">
                            <label><img src="img/logo.png"></label>
                        </div>

                        <div class="collapse navbar-collapse justify-content-center" id="FDMainMenu">

                                        <ul class="" id="navbar">
                                            <li><a href="index.php">
                                                    <button type="button" class="btn btn-sm" id="btn1">
                                                        <span data-feather="calendar"></span>
                                                        خانه
                                                    </button></a></li>
                                            <li><button type="button" class="btn btn-sm  dropdown-toggle" id="btn2">
                                                    <span data-feather="calendar"></span>
                                                    درباره ما
                                                </button></li>
                                            <li><button type="button" class="btn btn-sm  dropdown-toggle" id="btn3">
                                                    <span data-feather="calendar"></span>
                                                    خدمات
                                                </button></li>
                                            <li><button type="button" class="btn btn-sm  dropdown-toggle" id="btn4">
                                                    <span data-feather="calendar"></span>
                                                    کسب و کار
                                                </button></li>
                                        </ul>
                        </div>
                    </nav>
                </div>
            </div>

      <div class="col-lg-2 col-sm-12  text-left justify-content-end "  id="FDMainMenu">
            <div class="navbar text-left justify-content-end"   id="icon-bar">
                <ul class="nav" id="icon-mu">
                    <li id="icon-mu-li1"><a id="icon-mu-a1" href="login.php" class="nav-link" data-toggle="tooltipuser" data-placement="bottom" title="عضویت"><img src="./img/user.png" class="icon"/>
                            <label><span>ورود </span><span>| ثبت نام</span></a></label></li>
                    <li id="icon-mu-li2"><a href="#" id="icon-mu-a2" class="nav-link" data-toggle="tooltipbuy" data-placement="bottom" title="سفارشات" ><img src="./img/buy.png" class="icon" /></a></li>
                </ul>
            </div>

        </div>

    </div>
</header>

</body>
</html>

<?php
