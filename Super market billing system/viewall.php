<?php
    require_once('authorize.php');
?>


<?php
    $dbc = mysqli_connect('localhost:3306', 'root', 'Home1998', 'employee_db') or die('Couldn\'t connect to the database');


    $query = $_REQUEST['qr'];
    
    $result = mysqli_query($dbc, $query) or die('Failed to query the database');
    
    echo '<table border=1>';
    
        echo '<tr><th>Emp_id</th>   <th>Emp_Firstname</th>   <th>Emp_Lastname</th>   <th>Date_of_joining</th>   <th>Emp_Designation</th>   <th>Emp_Age</th>   <th>Emp_Salary</th></tr>';
    
        while($row = mysqli_fetch_array($result)){
            echo '<tr><td>' . $row['emp_ID'] . '</td><td> ' . $row['emp_Fname'] . '</td><td> ' . $row['emp_Lname'] . ' </td><td>' . $row['joining_date'] . '</td><td> ' . $row['emp_Designation'] . '</td><td> ' . $row['age'] . '</td><td> ' . $row['emp_Salary'] . '</td></tr>';
        }
        echo '</table>';
        mysqli_close($dbc);
?>
    