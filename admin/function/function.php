<?php
include('connection.php');
include('class.php');
if(isset($_POST['announcement'])){
$inputAnnounce = $connect->real_escape_string($_POST['inputAnnounce']);
    $date = date("m/d/Y");
    $connect->query("INSERT INTO `announce`(`announcement`, `date`) VALUES ('{$inputAnnounce}','{$date}')");
    header("location: ../Announcement.php");
}
if(isset($_POST['advantage'])){
    $radio_months = $connect->real_escape_string($_POST['radio_months']);
    $percentage = $connect->real_escape_string($_POST['percentage']);
    if($radio_months === "6months"){
        $connect->query("UPDATE discount SET 6months='$percentage' WHERE id=1");
    }else if($radio_months === "12months"){
        $connect->query("UPDATE discount SET 12months='$percentage' WHERE id=1");
    }
    header("location: ../Discount.php");
}
/*

wag mong gagalwain

function hide(){
    $username = "topher_06";
$email ="hokage@gmail.com";
$messages ="goodJob";
$date = date('m/d/Y');

$connect->query("INSERT INTO `report_bugs`(`email`, `username`, `date`, `messages`) VALUES ('{$email}','{$username}','{$date}','{$messages}')");

}*/
?>