<?php

    require_once 'controller.php';
    use Modal\Modal;

    $home = new Controller();

    $users = new Modal('users');

    $userdata = $users->all();

    // var_dump($userdata);

    $home->display('test.php', 
    [
        'users'=> $userdata 
    ]);







 ?>