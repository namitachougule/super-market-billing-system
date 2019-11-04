<?php
    require_once('authorize.php');
?>


<html>
    <head>
        <title>Billing system</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container" style="padding: 4%;">
            <div class="mainPanel">
                <div class="row" style="padding: 4%;">
                    <div class="col-sm">
                        <h1 class="header"><b>SuperMarket Management System</b></h1>
                        <hr style="background-color:grey; width: 80%;"></hr>
                    </div>
                </div>
                <div class="row" style="padding-top: 5%; padding-left:10%;">
                    <div class="col-xs-12 col-md-6 ">
                       <p class="text-center" style="font-size:160%;">Click here to go to billing page!....</p>
                   </div>
                    <div class="col-sm">
                        <a href="billing.php" class="btn btn-info" role="button" style="padding:2%" ><b>&nbsp;Billing&nbsp;</b></a>
                    </div>
                </div>
                <div class="row" style="padding-top: 5%; padding-left:10%;">
                    <div class="col-xs-12 col-md-6 ">
                    </div>
                </div>
                <div class="row" style="padding-top: 5%; padding-left:10%;">
                    <div class="col-xs-12 col-md-6 ">
                        <p class="text-center" style="font-size:160%;">Click here to Add Employees!.......</p>
                    </div>
                    <div class="col-sm">
                        <a href="addEmployee.php" class="btn btn-info" role="button" style="padding:2%" ><b>&nbsp;Add Employee&nbsp;</b></a>
                    </div>
                </div>
                <div class="row" style="padding-top: 5%; padding-left:10%;">
                    <div class="col-xs-12 col-md-6 ">
                    </div>
                </div>
                <div class="row" style="padding-top: 5%; padding-left:10%;">
                    <div class="col-xs-12 col-md-6 ">
                        <p class="text-center" style="font-size:160%;">Click here to Manage Employees!.......</p>
                    </div>
                    <div class="col-sm">
                        <a href="employeeMgmt.php" class="btn btn-info" role="button" style="padding:2%" ><b>&nbsp;Manage Employee&nbsp;</b></a>
                    </div>
                </div>
                <div class="row" style="padding-top: 5%; padding-left:10%;">
                    <div class="col-xs-12 col-md-6 ">
                    </div>
                </div>
            </div>  
        </div>
    </body>
</html>