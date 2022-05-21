<?php
include __DIR__.'/Model.php';

$display_password = 'none';

$model = new Model();

if($model->check_log())
{       
    $user_name = $_SESSION['USERNAME'];
    $pasword = $_SESSION['PASSWORD'];


    $flag_connection = $model->check_user($user_name,$pasword);
    if($flag_connection)
    $model->redirect("panel.php");
}

$flag_reload = $model->check_reload();

if($flag_reload)
{
    $user_name_reload = $model->get_username();
    $password_reload = $model->get_password();
}

/*
login
*/
if(isset($_POST['submit']))
{
    if($_POST['submit']=='open')
    {
        
        
        $user_name = $_POST['user_name'];
        $pasword = $_POST['password'];
    
        $flag_connection = $model->check_user($user_name,$pasword);
        if($flag_connection==false)
        $display_password = 'block';
        else
        {
            if(isset($_POST['reload']))
            {
                $model->reload($user_name,$pasword);
            }
            else
            {
                $model->expr_info();
            }

            $model->redirect("index.php");

        }

        
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__.'/link.php'; ?>
    <title>login</title>
</head>
<body class="">
<?php include __DIR__.'/header.php'; ?>
<div id="base-login" class="container justify-content-center text-right">
    <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="flex-row mb-5 bg-light border" id="login">

            <div class="img text-center"><img  id="arm-log" src="./img/login.png"/></div>

            <div class="container-fluid w-75 text-center bg-danger align-content-center" id="box-login-msg" style="display:<?php echo $display_password; ?>;">
                <div class="">
                    <label class="container" id="login-msg"> اطلاعات صحیح وارد نشده است !</label>
                </div>
            </div>

            <form class="form-group" action="login.php" id="login-form" method="POST">

                <h5 id="form-head">ورود | ثبت نام</h5>
                <div class="input-group-prepend mb-3" id="box-text">
                    <label for="text"><img src="./img/us.png" style="margin: 0 8px"/></label>
                    <input type="text" class="form-control" id="text" placeholder="نام کاربری" name="user_name" value="<?php if($flag_reload) echo $user_name_reload ;?>">
                </div>
                <div class="input-group-prepend mb-5" id="box-pass">
                    <label for="pass"><img src="./img/lo.png" style="margin: 0 8px"/></label>
                    <input type="password" class="form-control" id="pass" placeholder="رمزعبور" name="password" value="<?php if($flag_reload) echo $password_reload; ?>">
                </div>
                <div class="input-group-prepend mb-3" id="box-cheak">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"  name="reload" <?php  if($flag_reload) echo 'checked="checked"';?>  id="cheakbox">
                        <label id="form-cheak" >مرا به خاطر بسپار!!</label>
                    </label>
                </div>
                <button type="submit" class="btn bg-warning btn-block mb-3" id="login-btn" value="open" name="submit" >ورود به سایت</button>

                    <div class="text-left" id="form-lbl">
                        <label><a href="#" id="form-lbl-a"> بازیابی رمز</a></label>
                        <label>|</label>
                        <label ><a href="#" id="form-lbl-b">ثبت نام</a></label>
                    </div>
                </form>
        </div>
          <div class="col-lg-3"></div>
</div>
</div>
</body>
</html>
