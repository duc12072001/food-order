<?php 
    //Start Session
    session_start();

    $db = array (
        'server' => 'remotemysql.com',
        'username' => 'hSbPDnZiVP',
        'password' => 'ZmqjJBfSg1',
        'dbname' => 'hSbPDnZiVP'
    );

    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/food-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '123456789');
    define('DB_NAME', 'food-order');
    
    $conn = mysqli_connect($db['server'], $db['username'], $db['password'], $db['dbname']);

    if(!$conn) {
        die('Kết nối không thành công'. mysqli_connect_error($conn));
    }
    echo 'Kết Nối Thành Công';
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database


?>


