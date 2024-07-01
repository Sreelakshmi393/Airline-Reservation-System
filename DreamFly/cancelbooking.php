<?php
    include_once 'dbconnect2.php';
    mysqli_query($con,"delete from book where ID=".$_REQUEST['bid']);
    header("location:showhistory.php");
?>