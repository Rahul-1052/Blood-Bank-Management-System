<?php 
include'dbConfig.php';
    $events = array();
    $query = mysqli_query($con, "SELECT * FROM program");
    while($fetch = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
     $e = array();
     $e['title'] = $fetch['program'].",".$fetch['program_address'];
     $e['start'] = $fetch['program_date'];
     $e['end'] = $fetch['program_date'];   
     array_push($events, $e);
    }
    echo json_encode($events);
?>