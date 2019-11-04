<?php
    require_once('authorize.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Employee management page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container" style="padding:4%">
            <div class="mainPanel">
                <div class="row">
                    <div class="col-sm">
                        <h1 class="header">Employee Management</h1>
                        <hr style="background-color:grey; width: 80%;"></hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <form id="mgmtForm">
                            <div class="form-group row">
                                <div class="col-sm-7">
                                    <label for="empId" class="col-sm col-form-label">Employee Id</label>
                                    <input type="text" class="form-control" id="empId" placeholder="Enter Id" name="empId">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="button" class="btn btn-outline-light" id="findempButton" value="&nbsp;Find Employee&nbsp;">                                        
                                </div>
                                <div class="col-sm-6">
                                    <input type="button" class="btn btn-outline-light" id="viewallButton" value="&nbsp;View All Employees&nbsp;">                                        
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-6 billContainer" >
                        <div class="row">
                            <div class="col">
                                <center> <h5 class="header">Employee details</h5></center>
                                <hr style="background-color:grey; width: 80%;"></hr>
                            </div>
                        </div>
                        <div class="row">
                            <table width=100% style="margin: 5%;" id="empTable">
                                <tr>
                                    <td width=30%><b></b></td> 
                                    <td width=70%></td>
                                </tr>
                                <tr>
                                    <td><b>ID :</b></td>
                                    <td></td> 
                                </tr>
                                <tr>
                                    <td><b>First Name :</b></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>Last Name :</b></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>Date of Joining :</b></td> 
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>Designation :</b></td> 
                                    <td></td>
                                </tr> 
                                <tr>
                                    <td><b>Age :</b></td> 
                                    <td></td>
                                </tr>   
                                <tr>
                                    <td><b>Salary :</b></td> 
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="button" class="btn btn-outline-light" id="removeempButton" value="&nbsp;Remove Employee&nbsp;">   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="emp.js"></script>    
    </body>
</html>