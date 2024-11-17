<?php
$host = "localhost";
$user = "DieAmine";
$password = "Clinique";
$db = "da_clinique";
$data = mysqli_connect($host, $user, $password, $db);

$sql = "select * from costumer order by heur ";
$result = mysqli_query($data, $sql);
$usersList = array();
while ($row = mysqli_fetch_assoc($result)) {
    $date = $row['date'];
    $title = "" . $row['heur'] . ": " . $row['nom'] . "  " . $row['prenom'] . "";
    if ($row['etat'] == "urgent") {
        $className = "bg-danger";
    } else {
        $className = "bg-info";
    }
    $user0 = array("title" => $title, "start" => $row['date'], "className" => $className);
    array_push($usersList, $user0);
}