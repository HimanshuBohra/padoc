<?php
include_once("php\connection.php");
$query = "SELECT * FROM doctor";
$result=mysqli_query($conn, $query);
if($result)
{
    while($a = mysqli_fetch_assoc($result))
    {
        echo "<br>Doctor ID :".$a['doc_id'];
        echo "<br>Doctor Name :".$a['doc_name'];
    }
}
 ?>