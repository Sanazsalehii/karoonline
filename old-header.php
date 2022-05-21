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
<header id="head">
    <div class="">
        <div class="row" id="navbar-menu">
            <div class="col-lg col-sm bg-info" id="navbar">
                <div class="" id="nav">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <div class="collapse navbar-collapse" id="FDMainMenu">
                            <ul class="nav" role="tablist" id="menubar">
                                <li class="nav-item"><a href="index.php" class="nav-link">خانه</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">درباره ما</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">تماس باما</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">خبرنامه</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">اطلاعات</a></li>
                            </ul>
                        </div>

                        <button class="navbar-toggler" id="btn-menu"  type="button" data-toggle="collapse" data-target="#FDMainMenu" aria-controls="FDMainMenu" aria-expanded="false" aria-label="نمایش فهرست">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <ul class="nav" role="tablist" id="menu-icon">
                            <li class="flex-item"><a href="#" class="nav-link" data-toggle="tooltipuser" data-placement="bottom" title="عضویت"><img src="./img/adduser.png" class="icon"/></a></li>
                            <li class="flex-item"><a href="#" class="nav-link" data-toggle="tooltipbuy" data-placement="bottom" title="سفارشات" ><img src="./img/allbuy.png" class="icon" /></a></li>
                            <li class="flex-item"><a href="#" class="nav-link" data-toggle="tooltipinsta" data-placement="bottom" title="اینستاگرام"><img src="./img/instagram.png" class="icon" /></a></li>
                            <li class="flex-item"><a href="login.php"><button type="button" class="btn" id="menu-icon-btn" style="margin-top: 8px; color: #184d71;display: <?php echo $display_register;?>;" >ثبت نام</button></a></li>
                            <li class="flex-item"><a href="out_config.php"><button type="button" class="btn" id="menu-icon-btn" style="margin-top: 8px; color: #184d71;display: <?php echo $display_panel;?>">خروج </button></a></li>
                            <li class="flex-item"><a href="user/dashboard.php"><button type="button" class="btn" id="menu-icon-btn" style="margin-top: 8px; color: #184d71;display: <?php echo $display_panel;?>">پنل کاربری </button></a></li>
                            <li class="flex-item"><a href=""><button type="button" class="btn" id="menu-icon-btn" style="margin-top: 8px; color: #184d71;display: <?php echo $display_open;?>">ورود </button></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>



