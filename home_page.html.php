<!DOCTYPE html>  
<html lang="en">  
  <head>  
    <title>List of job_id's</title>  
    <meta http-equiv="content-type"  
        content="text/html; charset=utf-8"/>  
  </head>  
  <body> 

    <p>Sort jobs by</p>
    <form method="post" action="select1.php">
      <select name="sort_id">  
        <option value="job_location">School</option>
        <option value="job_date">Date</option>
      </select>

      <select name="sort_selection">
        <option value="ALL">ALL</option>
        <option value="Location1">THS</option>
        <option value="Location2">SHS</option>
        <option value="Location3">GHS</option>
        <option value="Location4">CLC</option>
      </select>
      <button type="submit" value="execute"></button>
    </form>