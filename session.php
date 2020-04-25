<?php
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['customerID']) || (trim($_SESSION['customerID']) == '')) {
    header("location:login.php");
    exit();
}
$session_id=$_SESSION['customerID'];
?>