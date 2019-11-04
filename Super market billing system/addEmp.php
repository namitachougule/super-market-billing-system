<?php
    require_once('authorize.php');
?>

<?php
$dbc = mysqli_connect('localhost:3306', 'root', 'Home1998', 'employee_db') or die('Couldn\'t connect to the database');
    $empId = $_POST['employeeId'];
    $empFname = $_POST['employeeFname'];
    $empLname = $_POST['employeeLname'];
    $empDate = $_POST['dateToday'];
    $empDesignation = $_POST['designation'];
    $empAge= $_POST['Age'];
    $empSalary = $_POST['salary'];

    $query = "INSERT INTO Employee VALUES ($empId,'$empFname','$empLname','$empDate','$empDesignation',$empAge ,$empSalary)";
    
    $result = mysqli_query($dbc, $query) or die('Failed to query the database');
   
    if($result){
        echo 'Succesfully Added';      

    }
    mysqli_close($dbc);
?>
