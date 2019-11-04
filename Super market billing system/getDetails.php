<?php
    require_once('authorize.php');
?>


<?php
    $dbc = mysqli_connect('localhost:3306', 'root', 'Home1998', 'employee_db') or die('Couldn\'t connect to the database');

    $emp_ID = $_REQUEST['id'];

    $query = "SELECT * FROM Employee WHERE emp_ID = $emp_ID  ";

    $result = mysqli_query($dbc, $query) or die('Failed to query the database');

    while($row = mysqli_fetch_array($result)){
        echo $row['emp_ID']. "," .$row['emp_Fname']. "," .$row['emp_Lname']. "," .$row['joining_date']. "," .$row['emp_Designation']. "," .$row['age']. "," .$row['emp_Salary'];
    }
    mysqli_close($dbc);

?>
    