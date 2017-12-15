<?php

    header('Access-Control-Allow-Origin: *');

    require '/vendor/autoload.php';
    use Ivmelo\SUAP\SUAP;

    $suap = new SUAP();

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        try{
            $token = $suap->autenticar($username, $password);
            $suap->setToken($token['token']);
    
            echo true;
        }catch(Exception $e){
            echo false;
        }
    }
?>