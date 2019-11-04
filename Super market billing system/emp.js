function init(){  
    var findempButton = document.getElementById('findempButton');
    var viewallButton = document.getElementById('viewallButton');
    var removeempButton = document.getElementById('removeempButton');

    findempButton.onclick = findEmp;
    viewallButton.onclick = allEmp;
    removeempButton.onclick = removeEmp;
}


var findEmp = function() {  
    //ajax
   var empId = document.getElementById('empId').value;
    if(empId === ""){
        return;
    }
    else{
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var details= this.responseText;
                var fields= details.split(',');
                var Eid = fields[0];
                var Efname = fields[1];
                var Elname = fields[2];
                var Edate = fields[3];
                var Edesignation = fields[4];
                var Eage = fields[5];
                var Esalary = fields[6];

                var firstRow = document.getElementById("empTable").rows[1].getElementsByTagName('td');
                firstRow[1].innerHTML = Eid ;
                
                var secondRow = document.getElementById("empTable").rows[2].getElementsByTagName('td');
                secondRow[1].innerHTML = Efname ;

                var thirdRow = document.getElementById("empTable").rows[3].getElementsByTagName('td');
                thirdRow[1].innerHTML = Elname ;

                var fourthRow = document.getElementById("empTable").rows[4].getElementsByTagName('td');
                fourthRow[1].innerHTML = Edate ;

                var fifthRow = document.getElementById("empTable").rows[5].getElementsByTagName('td');
                fifthRow[1].innerHTML = Edesignation ;

                var sixthRow = document.getElementById("empTable").rows[6].getElementsByTagName('td');
                sixthRow[1].innerHTML = Eage ;

                var seventhRow = document.getElementById("empTable").rows[7].getElementsByTagName('td');
                seventhRow[1].innerHTML = (Esalary) + ".00/-" ;
            }
        };
        xhttp.open("GET", "getDetails.php?id=" + empId , true);
        xhttp.send();        
    }
};

var allEmp = function() {
    var queryStr= "SELECT * FROM Employee";
    window.open('viewall.php?qr=' + queryStr);     
};

var removeEmp = function() {  
    //ajax
   var empId = document.getElementById('empId').value;
    if(empId === ""){
        return;
    }
    else{
        var Dquerystr= "DELETE FROM Employee WHERE emp_ID=" + empId;
        window.open('removeEmp.php?dq=' + Dquerystr); 
    }    
};


window.onload = init;
