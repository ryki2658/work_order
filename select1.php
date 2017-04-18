<?php

$job_number = $_POST['job_id'];
$job_area = $_POST['location'];
$job_details = $_POST['description'];
$job_reminders = $_POST['notes'];
$job_created = date("Y-m-d H:i:s");

$job_sort_id = $_POST['sort_id'];
$job_sort_selection = $_POST['sort_selection'];

echo $job_sort_selection;
echo $job_number;
echo $job_area;
echo $job_details;
echo $job_reminders;
echo $job_created;

$link = mysqli_connect("localhost", "root", "root", "ticket");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//$sql = "SELECT * FROM jobs";
//$sql = "SELECT * FROM jobs WHERE job_id LIKE '%".$job_number."%' OR job_location LIKE '%".$job_area."%' OR job_description LIKE '%".$job_details."%' OR job_notes LIKE '%".$job_reminders."%' OR job_date LIKE '%".$job_created."%'";

//  Select query execution
if($job_sort_selection == "ALL"){
    $sql = "SELECT * FROM jobs";
    echo $sql;
} else{
    $sql = "SELECT * FROM jobs WHERE $job_sort_id = '$job_sort_selection'";
    echo $sql;
}

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $job_id[] = $row['job_id'];
            $job_location[] = $row['job_location'];
            $job_description[] = $row['job_description'];
            $job_notes[] = $row['job_notes'];
            $job_date[] = $row['job_date'];
        }
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}

// Make query available to html page
include "home_page1.html.php";

// Close connection
mysqli_close($link);
?>

