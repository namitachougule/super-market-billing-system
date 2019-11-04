function init(){
    //html components
    var addButton = document.getElementById('addButton');
    var checkoutButton = document.getElementById('checkoutButton');
    var totalValue = document.getElementById('totalValue');
    var dbitemsButton = document.getElementById('dbitemsButton');
    //event handlers
    addButton.onclick = addItem;
    checkoutButton.onclick = checkout;
    dbitemsButton.onclick = viewDb;

}

var billItems=[];
var total=0;
var temp;

var addItem = function() {  
    //ajax
    var itemName = document.getElementById('itemName').value;
    var itemQuantity = document.getElementById('itemQuantity').value;
    if(itemName === "" || itemQuantity === "" ){
        return;
    }
    else{
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var price = this.responseText;
                
                total += price*itemQuantity;
                var table = document.getElementById("billTable");
                var numOfRows = table.getElementsByTagName('tr').length;
                var row = table.insertRow(numOfRows-2);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                cell1.innerHTML = itemName;
                cell2.innerHTML = itemQuantity;
                cell3.innerHTML = price+" * "+itemQuantity;
                cell4.innerHTML =(price*itemQuantity) + ".00";
                totalValue.innerHTML = "Rs. " + total + ".00/-";
                billItems.push({
                    item: itemName,
                    quantity: itemQuantity,
                    price: (price*itemQuantity)  
                });
                setStock(itemName);
            }
        };
        xhttp.open("GET", "findPrice.php?i=" + itemName , true);
        xhttp.send();        
    }
};
var setStock= function(itemName) {
    temp = itemName;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            for(var i = 0; i<billItems.length; i++){
                if(billItems[i].item === temp){
                    billItems[i].stock = parseInt(this.responseText); 
                    temp ="";
                }
            }
        }
    };
    xhttp.open("GET", "findStock.php?i=" + itemName , true);
    xhttp.send(); 
};

var checkout = function() {
    var queryString = "UPDATE items set quantity = (case ";
    for(var i=0; i<billItems.length; i++){
        queryString += "when item_name = '" + billItems[i].item + "' then " + (billItems[i].stock - billItems[i].quantity) + " \n";
    }
    queryString += "end) WHERE item_name in (";
    if(billItems.length == 1){
        queryString += "'" + billItems[0].item + "')"; 

    }
    else{
        queryString += "'" + billItems[0].item + "'";
        for(var i=1; i<billItems.length; i++){
            queryString += ", '" + billItems[i].item + "'"; 
        }
        queryString += ")";
    }
    window.open('buy.php?q=' + queryString);
  
};

  

var viewDb = function() {
    var itemquery= "SELECT * FROM Items";
    window.open('viewDbItems.php?j=' + itemquery);     
};

/*function removeItem() {
    window.alert('hi');
    var newQuantity;
    var pricePerPiece;
    var oldPrice;
    var toRemove = false;
    var itemToBeRemoved = document.getElementById('itemName').value;
    var quantityToBeRemoved = document.getElementById('itemQuantity').value;
    
    if(itemToBeRemoved === "" || quantityToBeRemoved === "" ){
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
    var table = document.getElementById('billTable');
    var rows = table.getElementByTagName("TR");
    for(var i=0; i<rows.length; i++){
        var cells = rows[i].getElementByTagName("TD");
        if ( cells[0].innerHTML === itemToBeRemoved){
            if(toRemove){
                table.deleteRow(i); //delete the ith row
            }
            else{
                cells[1].innerHTML = newQuantity;
                cells[2].innerHTML = newQuantity * pricePerPiece;
                totalValue.innerHTML = "Rs. " + (total - oldPrice + (newQuantity*pricePerPiece)) +  ".00/-";
            }
        }
    }
}; */

window.onload = init;