<?php 
$url = "localhost";
$username = "bloodbank";
$password = "";
$db = "bloodbank";
try {

    // Connect to database
    $connection = new PDO($url, $username, $password,$db);

    // Prepare and execute query
    $query = "SELECT * FROM program";
    $sth = $connection->prepare($query);
    $sth->execute();

    // Returning array
    $events = array();

    // Fetch results
    while ($row = $sth->fetch(PDO::FETCH_ASSOC) {

        $e = array();
        $e['id'] = $row['program_id'];
        $e['title'] = $row['program'];
        $e['start'] = $row['program_date'];
        $e['end'] = $row['program_date'];
        $e['allDay'] = false;

        // Merge the event array into the return array
        array_push($events, $e);

    }

    // Output json for our calendar
    echo json_encode($events);
    exit();

} catch (PDOException $e){
    echo $e->getMessage();
}
?>