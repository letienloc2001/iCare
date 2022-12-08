<?php
    include('./connection.php');
    if(isset($_GET['doc_id']) && isset($_GET['pat_id'])){
        $doc_id = $_GET['doc_id'];
        $pat_id = $_GET['pat_id'];
    }
    $today = date("Y-m-d");
    $meeting_date = date("Y-m-d",strtotime('+3 days'));

    $sql = "call register_appointment($pat_id, $doc_id, '$meeting_date', '')";
    echo $meeting_date;
    $result = mysqli_query($conn, $sql);
    
    header("Location:../index.php?page=doctors");
?>