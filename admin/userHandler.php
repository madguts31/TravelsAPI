<?php

session_start();
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("PM_Banq", $conn);

if (isset($_POST['login'])) {



    $uemail = $_POST['uemail'];
    $upass = $_POST['upass'];


    $qry = "SELECT emp_id,emp_name,emp_password FROM `travelsdb`.`emp_master` WHERE `emp_master`.`emp_email` = '$uemail'";
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
        $_SESSION['emp'] = $uname;
        $_SESSION['empid'] = $uid;
        header('Location:dashboard.php');
    } else {
        $msg = "Wrong Credential";
        $_SESSION['msg'] = $msg;
        header('Location:index.php');
    }
}
?>

