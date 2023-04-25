<?php
session_start();
require_once("Controller/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");
$user_id=$_SESSION['user_id'];
if(isset($_POST['sound_name'])){
    $sound_id=$_POST['sound_name'];
    $insert = $db_handle->insertQuery("INSERT INTO `sound`(`sound_id`, `user_id`,`inserted_at`) VALUES ('$sound_id','$user_id','$inserted_at')");
}

if(isset($_POST['reset'])){
    $delete = $db_handle->insertQuery("TRUNCATE TABLE `sound`");
}

if(isset($_POST['play_sound'])){
    $play_sound=$_POST['play_sound'];
    $insert = $db_handle->insertQuery("INSERT INTO `sound`(`sound_id`, `user_id`,`inserted_at`) VALUES ('$sound_id','$user_id','$inserted_at')");
}

