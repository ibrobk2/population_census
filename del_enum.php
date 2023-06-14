<?php
include "includes/server.php";

if(isset($_GET['del'])){
    $id = $_GET['del'];

    $sql = "DELETE FROM users WHERE role='enumerator' AND id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: manage_enumerators.php");
    }
}

?>