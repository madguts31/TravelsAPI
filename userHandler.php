<?php

session_start();
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("PM_Banq", $conn);

if (isset($_POST['login'])) {



    $uemail = $_POST['uemail'];
    $upass = $_POST['upass'];


    $qry = "SELECT user_id,user_name,user_password FROM `travelsdb`.`user_master` WHERE `user_master`.`user_email` = '$uemail'";
    $result = mysql_query($qry, $conn);

    if (!$result) {
        //$msg = 
        echo mysql_error();
        //$_SESSION['msg'] = $msg;
        //header('Location:login.php');
    }
    $row = mysql_fetch_row($result);
    $uid = $row[0];
    $uname = $row[1];


    if ($upass == $row[2]) {
        $_SESSION['user'] = $uname;
        $_SESSION['uid'] = $uid;
        header('Location:index.php');
    } else {
        echo $row[2];
        $msg = "Wrong Password";
        $_SESSION['msg'] = $msg;
        header('Location:login.php');
    }
}
?>

