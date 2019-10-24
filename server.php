<?php 
include_once('./dbConfig.php');
?>
<style>
<?php
include_once('./Assets/style.css');
?>
</style>
<?php
if (isset($_POST["formSubmit"])){
    
    $name=$_POST["employeeName"];
    $fetchQuery=mysqli_query($con,"select * from employee_info where name like '%$name%'");
    if (!mysqli_num_rows($fetchQuery)==0) { 
    echo "<table class='searchResults'>
    <tr>
    <th>Name</th>
    <th>Designation</th>
    <th>Contact Number</th></tr>";

    while($row=mysqli_fetch_array($fetchQuery)){
       echo  "<tr><td>".$row['name']."</td>
        <td>".$row['designation']."</td>
        <td>". $row['contact_num']."</td>
        </tr>";
    }
    echo "</table>";
}
else{
    echo "No data found!!!!!!!!!!";
}
}

?>