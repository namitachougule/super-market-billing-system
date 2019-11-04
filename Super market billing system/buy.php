<?php
    require_once('authorize.php');
?>

<?php
$dbc = mysqli_connect('localhost:3306', 'root', 'Home1998', 'super_market_db') or die('Couldn\'t connect to the database');

    $query = $_REQUEST['q'];

    $result = mysqli_query($dbc, $query) or die('Failed to query the database');

    if($result){
        echo 'Successfull transaction';      

    }
    mysqli_close($dbc);
    ?>