<?php
    require_once('authorize.php');
?>


<?php
    $dbc = mysqli_connect('localhost:3306', 'root', 'Home1998', 'super_market_db') or die('Couldn\'t connect to the database');

    $item_name = $_REQUEST['i'];

    $query = "SELECT quantity FROM items WHERE item_name = '$item_name'";

    $result = mysqli_query($dbc, $query) or die('Failed to query the database');

    while($row = mysqli_fetch_array($result)){
        echo $row['quantity'];
    }
    mysqli_close($dbc);


?>