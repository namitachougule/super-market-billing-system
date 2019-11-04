<?php
    require_once('authorize.php');
?>


<?php
$dbc = mysqli_connect('localhost:3306', 'root', 'Home1998', 'employee_db') or die('Couldn\'t connect to the database');

    $query = $_REQUEST['dq'];

    $result = mysqli_query($dbc, $query) or die('Failed to query the database');

    if($result){
        echo 'Successfully Removed';      

    }
    mysqli_close($dbc);
    ?>