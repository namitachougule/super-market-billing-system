<?php
    require_once('authorize.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Employee detail page</title>
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
                        <h1 class="header">Add Details</h1>
                        <hr style="background-color:grey; width: 80%;"></hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-9">
                        <form id="detailsForm" action="addEmp.php" method="post" target="_blank">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="employeeId" class="col-sm col-form-label">Employee Id</label>
                                    <input type="text" class="form-control" id="employeeId" placeholder="Enter Id" name="employeeId" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="employeeFname" class="col-sm col-form-label">First Name</label>
                                    <input type="text" class="form-control" id="employeeFname" placeholder="Enter First name...." name="employeeFname" required>
                                </div><div class="col-sm-6">
                                    <label for="employeeLname" class="col-sm col-form-label">Last Name</label>
                                    <input type="text" class="form-control" id="employeeLname" placeholder="Enter Last name...." name="employeeLname" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="dateToday" class="col-sm col-form-label">Joining Date</label>
                                    <input type="text" class="form-control" id="dateToday" placeholder="YYYY-MM-DD" name="dateToday" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="designation" class="col-sm col-form-label">Designation</label>
                                    <input type="text" class="form-control" id="designation" placeholder="enter designation" name="designation" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label for="Age" class="col-sm col-form-label">Age</label>
                                    <input type="number" class="form-control" id="Age" placeholder="Enter Age" name="Age" required>
                                </div>
                                <div class="col-sm-4">
                                    <label for="salary" class="col-sm col-form-label">Salary</label>
                                    <input type="number" class="form-control" id="salary" placeholder="Enter salary" name="salary" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input type="submit" class="btn btn-outline-light" id="addEmpButton" value="&nbsp;&nbsp;Add&nbsp;&nbsp;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="emp.js"></script>
    </body>
</html>