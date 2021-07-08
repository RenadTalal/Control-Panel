<?php

$conn = mysqli_connect('localhost','root','','EngineDB');

if (isset($_REQUEST['submit'])){
    $eng1 = $_REQUEST['eng1'];
    $eng2 = $_REQUEST['eng2'];
    $eng3 = $_REQUEST['eng3'];
    $eng4 = $_REQUEST['eng4'];
    $eng5 = $_REQUEST['eng5'];
    $eng6 = $_REQUEST['eng5'];

    $sql = "INSERT INTO `Engines` (eng1,eng2,eng3,eng4,eng5,eng6) VALUES ('$eng1' , '$eng2' , '$eng3', '$eng4' , '$eng5' , '$eng6')";

    $result = $conn->query($sql);
    echo "Saved";

}


if (isset($_REQUEST['Run'])){
 $sql = "INSERT INTO `Engines` (Run) VALUES (1)";
      $result = $conn->query($sql);
       echo "Run";

}


mysqli_close($conn);
?>