<?php
include __DIR__.'/Config.php';
class Model
{
    public $coon;
    public function __construct()
    {
        try
        {
            $host = "localhost";
            $host_name = "root";
            $host_pass = "1234";

            $coon = mysqli_connect($host,$host_name,$host_pass);
            if(!$coon)
            {
                return false;
            }
            $this->coon = $coon;
            $db_select = mysqli_query($coon,"USE dbshop");
            if($db_select)
             return $coon;
             return false;
        }
        catch(Exception $e)
        {
            return false;
        }
    }


    public function reload($user_name,$pasword)
    {
        setcookie('USERNAME',$user_name,time()+3600*24*30,'/');
        setcookie('PASSWORD',$pasword,time()+3600*24*30,'/');
        setcookie('RELOAD',true,time()+3600*24*30,'/');
    }


    public function check_reload()
    {
       if(isset($_COOKIE['RELOAD']))
        return true;
        return false;
    }

    public function get_username()
    {
        return $_COOKIE['USERNAME'];
    }

    public function get_password()
    {
        return $_COOKIE['PASSWORD'];
    }

    public function expr_info()
    {
        setcookie('USERNAME','',time()-3600*24*30,'/');
        setcookie('PASSWORD','',time()-3600*24*30,'/');
        setcookie('RELOAD','',time()-3600*24*30,'/');
    }


    public function check_user($user_name,$pasword)
    {
        $coon = $this->coon;

        if($coon==false)
        {
            //ارور اتصال به پایگاه داده
        }
        else
        {
            $result = mysqli_query($coon,"SELECT * FROM `user_adminator` WHERE `user_name` = '$user_name' AND `password` = '$pasword' ");
            $row = mysqli_fetch_array($result);
            if($row==null)
            {
                return false;
            }
            else
            {
                $config = new Config();
                $config->login_in($user_name,$pasword,$row);
                return true;
            }
        }
    }


    public function check_log()
    {
        if(isset($_SESSION['USERNAME'])&&isset($_SESSION['PASSWORD']))
        return true;
        return false;
    }




    public function redirect($url)
    {
        if (!headers_sent()){
            header("Location: $url");
        }else{
            echo "<script type='text/javascript'>window.location.href='$url'</script>";
            echo "<noscript><meta http-equiv='refresh' content='0;url=$url'/></noscript>";
        }
        exit;
    }
}