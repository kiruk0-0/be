<?php 
    $con = mysqli_connect("localhost", "dietplan", "diet001", "dietplan");
    mysqli_query($con,'SET NAMES utf8');

	$id = $_POST["_id"];
    $picture0 = $_POST["picture0"];
    $food0 = $_POST["food0"];
    $mood0 = $_POST["mood0"];
    $comment0 = $_POST["comment0"];
    $picture1 = $_POST["picture1"];
    $food1 = $_POST["food1"];
    $mood1 = $_POST["mood1"];
    $comment1 = $_POST["comment1"];
    $picture2 = $_POST["picture2"];
    $food2 = $_POST["food2"];
    $mood2 = $_POST["mood2"];
    $comment2 = $_POST["comment2"];
    $picture3 = $_POST["picture3"];
    $food3 = $_POST["food3"];
    $mood3 = $_POST["mood3"];
    $comment3 = $_POST["comment3"];
    

    mysqli_query($con, "UPDATE testest SET picture0 = '$picture0', food0 = '$food0', mood0 = '$mood0', comment0 = '$comment0', picture1 = '$picture1', food1 = '$food1', mood1 = '$mood1', comment1 = '$comment1', picture2 = '$picture2', food2 = '$food2', mood2 = '$mood2', comment2 = '$comment2', picture3 = '$picture3', food3 = '$food3', mood3 = '$mood3', comment3 = '$comment3' WHERE _id = '$id'");
    
    $response = array();
    $response["success"] = true;
 
    echo json_encode($response);
?>
