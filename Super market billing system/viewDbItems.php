<?php
    require_once('authorize.php');
?>

<?php
    $dbc = mysqli_connect('localhost:3306', 'root', 'Home1998', 'super_market_db') or die('Couldn\'t connect to the database');

    $query = $_REQUEST['j'];
    
    $result = mysqli_query($dbc, $query) or die('Failed to query the database');

    echo '<table border=1>';
    
     echo '<tr><th>item_id</th>   <th>item_name</th>   <th>quantity</th>   <th>price_per_piece</th></tr>';
    
     while($row = mysqli_fetch_array($result)){
        echo '<tr><td>' . $row['item_ID'] . '</td><td> ' . $row['item_name'] . '</td><td> ' . $row['quantity'] . ' </td><td>' . $row['price_per_piece'] . '</td></tr>';
    }
    echo '</table>';
    mysqli_close($dbc);

?>