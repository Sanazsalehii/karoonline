<?php
session_start();
class Config
{
    public function __construct()
    {
        
    }

    public function login_in($username,$pasword,$row)
    {
        $_SESSION['USERNAME'] = $username;
        $_SESSION['PASSWORD'] = $pasword;
        $_SESSION['INFO'] = $row;
    }

    public function login_out()
    {
        session_unset();
        session_destroy();
    }
}