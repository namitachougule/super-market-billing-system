<?php
    require_once('authorize.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bill page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container" style="padding: 4%;">
            <div class="mainPanel">
                <div class="row">
                    <div class="col-sm">
                        <h1 class="header">Billing</h1>
                        <hr style="background-color:grey; width: 80%;"></hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6 ">
                        <form id="billingForm">
                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <label for="itemName" class="col-sm col-form-label">Item Name</label>
                                    <input type="text" class="form-control" id="itemName" placeholder="Enter your item name here..." name="itemName">
                                </div>
                                
                                <div class="col-sm-3">
                                    <label for="itemQuantity" class="col-sm col-form-label">Quantity</label>
                                    <input type="number" class="form-control" id="itemQuantity" placeholder="0" name="itemQuantity">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <input type="button" class="btn btn-outline-light" id="addButton" value="&nbsp;Add&nbsp;">
                                </div>
                                <!--<div class="col-sm-4">
                                    <input type="button" class="btn btn-outline-light" id="removeButton" onclick="removeItem()" value="&nbsp;Remove&nbsp;">
                                </div> -->
                                <div class="col-sm-4">
                                    <input type="button" class="btn btn-outline-light" id="checkoutButton" value="&nbsp;Check Out&nbsp;">
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" class="btn btn-outline-light" id="dbitemsButton" value="&nbsp;DB Items&nbsp;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-5 billContainer">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <center> <h5 class="header">Bill</h5></center>
                                    <hr style="background-color:grey; width: 80%;"></hr>
                                </div>
                            </div>
                            <div class="row">

                                <table width=100% style="margin: 2%;" id="billTable">
                                    <tr>
                                        <th width=50%>Item</th>
                                        <th width=10%>Qty</th>
                                        <th width=20%>perpiece</th>
                                        <th width=20%>Price</th>
                                        
                                    </tr>
                                    <tr>
                                        <td colspan=4>
                                        <hr style="background-color:grey; width: 100%;"></hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan=1>Total</th>
                                        <th colspan=2 style="text-align:left;" id="totalValue"> </th>
                                    </tr>
                                </table>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="main.js"></script>
    </body>
</html>
