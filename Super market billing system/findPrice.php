<?php
    require_once('authorize.php');
?>

<?php
    $dbc = mysqli_connect('localhost:3306', 'root', 'Home1998', 'super_market_db') or die('Couldn\'t connect to the database');

    $item_name = $_REQUEST['i'];

    $query = "SELECT price_per_piece, quantity FROM items WHERE item_name = '$item_name'";

    $result = mysqli_query($dbc, $query) or die('Failed to query the database');

    while($row = mysqli_fetch_array($result)){
        echo $row['price_per_piece'];
    }
    mysqli_close($dbc);



    /*
    function removeItem() {
    var newQuantity;
    var pricePerPiece;
    var oldPrice;
    var toRemove = false;
    var itemToBeRemoved = document.getElementById('itemName').value;
    var quantityToBeRemoved = document.getElementById('itemQuantity').value;
    
    if(itemName === "" || itemQuantity === "" ){
        return;
    }
    else{
        for(var i = 0; i<billItems.length; i++){
            if(billItems[i].item === itemToBeRemoved){
                if(quantityToBeRemoved < billItems[i].quantity){
                    oldPrice = billItems[i].price;
                    pricePerPiece = billItems[i].price/billItems[i].quantity;
                    billItems[i].quantity -= quantityToBeRemoved;
                    newQuantity = billItems[i].quantity;
                    billItems[i].price = pricePerPiece * newQuantity;
                    toRemove = false;
                }
                else{
                    billItems.splice(i, 1);
                    toRemove = true;
                }                
            }
        }
    }
    console.log('a');
    var table = document.getElementById('billTable');
    var rows = table.getElementsByTagName('tr');
    console.log('b');
    for(var i=0; i<rows.length; i++){
        var cells = rows[1].getElementsByTagName('td');
        if ( cells[0].innerText === itemToBeRemoved){
            console.log('c');
            if(toRemove){
                console.log('d');
                table.deleteRow(i); //delete the ith row
            }
            else{
                console.log('e');
                cells[1].innerHTML = newQuantity;
                cells[2].innerHTML = newQuantity * pricePerPiece;
                totalValue.innerHTML = "Rs. " + (total - oldPrice + (newQuantity*pricePerPiece)) +  ".00/-";
            }
        }
    }
    console.log('f');
};



    */
?>
