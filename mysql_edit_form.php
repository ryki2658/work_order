<?php

$job_id = $_POST['job_id'];
$job_location = $_POST['location'];
$job_description = $_POST['description'];
$job_notes = $_POST['notes'];
$job_date = date("Y-m-d H:i:s");

$link = mysqli_connect("localhost", "root", "root", "ticket");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "ALTER TABLE jobs (job_id, job_location, job_description, job_notes, job_date) VALUES ('$job_id', '$job_location', '$job_description', '$job_notes', '$job_date')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully on " . $job_date;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);

?>

<html>
     <body>
          <p><a href="sql_form_submit.html">Create new ticket</a></p>
     </body>
</html>
