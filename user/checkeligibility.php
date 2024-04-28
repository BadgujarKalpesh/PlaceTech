<?php

// To Handle Session Variables on This Page
session_start();

if (empty($_SESSION['id_user'])) {
    header("Location: index.php");
    exit();
}

// Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");

// If user Actually clicked apply button
if (isset($_GET)) {

    $sql = "SELECT * from users WHERE id_user='$_SESSION[id_user]' ";
    $result1 = $conn->query($sql);

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();

        // Extracting individual marks
        $hsc = (int)$row1['hsc'];
        $ssc = (int)$row1['ssc'];
        $ug = (int)$row1['ug']*10;

        // Checking if all marks are above 60
        if ($hsc >= 60 && $ssc >= 60 && $ug >= 60) {
            header("Location: ../view-job-post.php?id=$_GET[id]");
            $_SESSION['status'] = "You are eligible for this drive, apply if you are interested.";
            $_SESSION['status_code'] = "success";
            exit();
        } else {
            header("Location: ../view-job-post.php?id=$_GET[id]");
            $_SESSION['status'] = "You are not eligible for this drive as one or more of your marks are below 60.";
            $_SESSION['status_code'] = "success";
            exit();
        }
    }
}
?>
