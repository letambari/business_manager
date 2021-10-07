<?php include 'php_includes/check_login_status.php'; ?>
<?php include 'parsers/codes.php'; 

$sql2="SELECT * FROM chat_msg WHERE status = 1";
$result=mysqli_query($db_conx, $sql2);
$count=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Innocent Destiny Letambari - Sphere Technologies">
        <meta name="robots" content="nohome, nofollow">
        <title>SphereManager</title>
		<!-- Favicon -->
		
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

		<!-- Summernote CSS -->
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <style type="text/css">
            @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

.navbar-icon-top .navbar-nav .nav-link > .fa {
  position: relative;
  width: 36px;
  font-size: 24px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
  font-size: 0.75rem;
  position: absolute;
  right: 0;
  font-family: sans-serif;
}

.navbar-icon-top .navbar-nav .nav-link > .fa {
  top: 3px;
  line-height: 12px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
  top: -10px;
}

@media (min-width: 576px) {
  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 768px) {
  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 992px) {
  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 1200px) {
  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

        </style>
 
        
<!-- Favicon -->

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/style2.css">

        <link rel="stylesheet" href="assets/css/style3.css">
         <link rel="stylesheet" href="assets/css/buttons.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


        <script src="js/invoice.js"></script>
        	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

<!-- <script>
        function ajaxpsct(){
        
        var req = new XMLHttpRequest();
        
        req.onreadystatechange = function(){
        
        if(req.readyState == 4 && req.status == 200){
        
        document.getElementById('chatps').innerHTML = req.responseText;
        } 
        }
        req.open('GET','directmessages.php',true); 
        req.send();
        
        }
        setInterval(function(){ajax()},1000);
    </script> -->

<script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
	</script>


		<script>
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "add_dept.php";
    var tl = document.getElementById("title").value;
    // var us = document.getElementById("userID").value;
    // var cc = document.getElementById("company_code").value;
    // +"&userID="+us+"&company_code="+cc
    var vars = "Title="+tl;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>
<script>
function ajax_desgn(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_desgn.php";
    var tl = document.getElementById("title").value;
    var us = document.getElementById("userID").value;
    var cc = document.getElementById("company_code").value;
    var dp = document.getElementById("deptID").value;
    var vars = "Title="+tl+"&userID="+us+"&company_code="+cc+"&deptID="+dp;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_posts(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_employ.php";
    var fn = document.getElementById("FirstName").value;
    var ln = document.getElementById("LastName").value;
    var us = document.getElementById("userID").value;
    var cc = document.getElementById("company_code").value;
    var em = document.getElementById("email").value;
    var pd = document.getElementById("password").value;
    var rp = document.getElementById("re_password").value;
    var ep = document.getElementById("employee_id").value;
    var jd = document.getElementById("join_date").value;
    var ph = document.getElementById("phone").value;
    var cm = document.getElementById("company").value;
    var dp = document.getElementById("department").value;
    var ds = document.getElementById("designation").value;
    var vars = "FirstName="+fn+"&LastName="+ln+"&userID="+us+"&company_code="+cc+"&email="+em+"&password="+pd+"&re_password="+rp+"&employee_id="+ep+"&join_date="+jd+"&phone="+ph+"&company="+cm+"&department="+dp+"&designation="+ds;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_client(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_client.php";
    var fn = document.getElementById("FirstName").value;
    var ln = document.getElementById("LastName").value;
    var us = document.getElementById("userID").value;
    var cc = document.getElementById("company_code").value;
    var em = document.getElementById("email").value;
    var ep = document.getElementById("employee_id").value;
    var ph = document.getElementById("phone").value;
    var cm = document.getElementById("company").value;
    var vars = "FirstName="+fn+"&LastName="+ln+"&userID="+us+"&company_code="+cc+"&email="+em+"&employee_id="+ep+"&phone="+ph+"&company="+cm;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>


<script>
function ajax_sett(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_sett.php";
    var cn = document.getElementById("CompanyName").value;
    var cp = document.getElementById("ContactPerson").value;
    var ad = document.getElementById("address").value;
    var cu = document.getElementById("country").value;
    var em = document.getElementById("email").value;
    var ct = document.getElementById("city").value;
    var ph = document.getElementById("phone").value;
    var sp = document.getElementById("state_province").value;
    var us = document.getElementById("username").value;
    var wb = document.getElementById("website").value;
    var pc = document.getElementById("PostalCode").value;
    var ap = document.getElementById("ALTphone").value;
    var vars = "CompanyName="+cn+"&ContactPerson="+cp+"&address="+ad+"&country="+cu+"&email="+em+"&city="+ct+"&phone="+ph+"&state_province="+sp+"&username="+us+"&website="+wb+"&PostalCode="+pc+"&ALTphone="+ap;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_edit(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_employedit.php";
    var fn = document.getElementById("firstName").value;
     var ln = document.getElementById("lastname").value;
     var em = document.getElementById("email").value;
     var ep = document.getElementById("employee_id").value;
     var ph = document.getElementById("phone").value;
     var dp = document.getElementById("dept").value;
     var ds = document.getElementById("desig").value;
    var vars = "firstName="+fn+"&lastname="+ln+"&employee_id="+ep+"&email="+em+"&phone="+ph+"&dept="+dp+"&desig="+ds;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_editclient(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_editclient.php";
    var fn = document.getElementById("firstName").value;
     var ln = document.getElementById("lastname").value;
     var em = document.getElementById("email").value;
     var ep = document.getElementById("employee_id").value;
     var ph = document.getElementById("phone").value;
     var dp = document.getElementById("company").value;
     var ed = document.getElementById("employee_code").value;
    var vars = "firstName="+fn+"&lastname="+ln+"&employee_id="+ep+"&email="+em+"&phone="+ph+"&company="+dp+"&employee_code="+ed;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_deeletedept(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_deeletedept.php";
    var ed = document.getElementById("editdept").value;
    var eii = document.getElementById("editdeptid").value;
     
    var vars = "editdept="+ed+"&editdeptid="+eii;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_editdept(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_editdept.php";
    var ed = document.getElementById("editdept").value;
    var eii = document.getElementById("editdeptid").value;
     
    var vars = "editdept="+ed+"&editdeptid="+eii;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_editdesig(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_editdesig.php";
    var ed = document.getElementById("editdept").value;
    var eii = document.getElementById("editdeptid").value;
     
    var vars = "editdept="+ed+"&editdeptid="+eii;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_deletedesig(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_deletedesig.php";
    var ed = document.getElementById("editdept").value;
    var eii = document.getElementById("editdeptid").value;
     
    var vars = "editdept="+ed+"&editdeptid="+eii;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_project(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_project.php";
    var pn = document.getElementById("project_name").value;
    var cl = document.getElementById("client").value;
    var ed = document.getElementById("end_date").value;
    // var dt = document.getElementById("date").value;
    var rt = document.getElementById("rate").value;
    var pr = document.getElementById("Priority").value;
    var pl = document.getElementById("project_lead").value;
    var de = document.getElementById("Description").value;
    // var fi = document.getElementById("file").value; +"&file="+fi
    var us = document.getElementById("userID").value;
    var cm = document.getElementById("company_id").value;
    var st = document.getElementById("start").value;
    
    
    
    
    
     
    var vars = "project_name="+pn+"&client="+cl+"&end_date="+ed+"&rate="+rt+"&Priority="+pr+"&project_lead="+pl+"&Description="+de+"&userID="+us+"&company_id="+cm+"&start="+st;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_projectedit(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_projectedit.php";
    var pn = document.getElementById("project_name").value;
    var cl = document.getElementById("client").value;
    var ed = document.getElementById("end_date").value;
    // var dt = document.getElementById("date").value;
    var rt = document.getElementById("rate").value;
    var pr = document.getElementById("Priority").value;
    var pl = document.getElementById("project_lead").value;
    var de = document.getElementById("Description").value;
    // var fi = document.getElementById("file").value; +"&file="+fi
    var us = document.getElementById("userID").value;
    var cm = document.getElementById("company_id").value;
    var st = document.getElementById("start").value;
    var pi = document.getElementById("project_id").value;
    

    var vars = "project_name="+pn+"&client="+cl+"&end_date="+ed+"&rate="+rt+"&Priority="+pr+"&project_lead="+pl+"&Description="+de+"&userID="+us+"&company_id="+cm+"&start="+st+"&project_id="+pi;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>


<!-- <script>
function ajax_task(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_task.php";
    var nt = document.getElementById("newtask").value;
   

    var vars = "newtask="+nt;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script> -->

<script>
function ajax_tasks(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "my_parse_file.php";
    var fn = document.getElementById("new-task").value;
    var ln = document.getElementById("Description2").value;
    // var id = document.getElementById("id").value;
    var vars = "Title="+fn+"&Desc="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_tasks(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "my_parse_file.php";
    var fn = document.getElementById("new-task").value;
    var ln = document.getElementById("Description2").value;
    // var id = document.getElementById("id").value;
    var vars = "Title="+fn+"&Desc="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_edittask(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_edittask.php";
    var td = document.getElementById("task_desc").value;
    var ti = document.getElementById("task_id").value;
    var pi = document.getElementById("projectsID").value;
     
    var vars = "task_desc="+td+"&task_id="+ti+"&projectsID="+pi;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>


<script>
function ajax_postss(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_postss.php";
    var fn = document.getElementById("FirstName").value;
    var ln = document.getElementById("LastName").value;
    var us = document.getElementById("userID").value;
    var cc = document.getElementById("company_code").value;

    var vars = "FirstName="+fn+"&LastName="+ln+"&userID="+us+"&company_code="+cc;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajax_expense(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax_expense.php";
    var fn = document.getElementById("FirstName").value;
    var ln = document.getElementById("LastName").value;
    var us = document.getElementById("userID").value;
    var cc = document.getElementById("company_code").value;

    var vars = "FirstName="+fn+"&LastName="+ln+"&userID="+us+"&company_code="+cc;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajaxchat(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxchat.php";
    var na = document.getElementById("name").value;
    var ms = document.getElementById("msg").value;
    var pid = document.getElementById("pid").value;
    var cid = document.getElementById("company_id").value;
  
    var vars = "name="+na+"&msg="+ms+"&pid="+pid+"&company_id="+cid;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
            document.getElementById("msg").value='';
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function ajaxpchat(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajaxpchat.php";
  //  var na = document.getElementById("date_time").value;
    var ms = document.getElementById("msg").value;
    var scid = document.getElementById("s_company_id").value;
    var rcid = document.getElementById("r_company_id").value;
    var sid = document.getElementById("sender_id").value;
    var sfn = document.getElementById("sender_fullname").value;
    var rid = document.getElementById("reciever_id").value;
  
    var vars = "msg="+ms+"&s_company_id="+scid+"&r_company_id="+rcid+"&sender_id="+sid+"&sender_fullname="+sfn+"&reciever_id="+rid;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
            document.getElementById("msg").value='';
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script>
function completeproject(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "completeproject.php";
    var na = document.getElementById("completep").value;
    //var ms = document.getElementById("msg").value;
  
    var vars = "completep="+na;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "<img src='assets/img/preloader.gif' alt='Processing...'>";
}
</script>

<script type="text/javascript">

    function myFunction() {
        $.ajax({
            url: "view_notification.php",
            type: "POST",
            processData:false,
            success: function(data){
                $("#notification-count").remove();                  
                $("#notification-latest").show();$("#notification-latest").html(data);
            },
            error: function(){}           
        });
     }
     
     $(document).ready(function() {
        $('body').click(function(e){
            if ( e.target.id != 'notification-icon'){
                $("#notification-latest").hide();
            }
        });
    });
         
    </script>

    <script>
/* Script written by Adam Khoury @ DevelopPHP.com */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
function _(el){
    return document.getElementById(el);
}
function uploadFile(){
    var file = _("file1").files[0];
    // alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("file1", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "file_upload_parser.php");
    ajax.send(formdata);
}
function progressHandler(event){
    _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
    var percent = (event.loaded / event.total) * 100;
    _("progressBar").value = Math.round(percent);
    _("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
    _("status").innerHTML = event.target.responseText;
    _("progressBar").value = 0;
}
function errorHandler(event){
    _("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
    _("status").innerHTML = "Upload Aborted";
}
</script>
    </head>
    <body onload="ajaxpsct();">
		<!-- Main Wrapper -->
        <div class="main-wrapper" onload="ajax();">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="home" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3><?php echo $CompanyName; ?></h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->

            	<ul class="nav user-menu">
				
					<!-- Search -->
					<!-- <li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li> -->
					<!-- /Search -->
				
					<!-- Flag -->
					
					<!-- /Flag -->
					
					<!-- Notifications -->
				<!-- 	
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
								
								
								
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-13.jpg">
												</span>
												<ul class="dropdown-menu"></ul>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities">View all Notifications</a>
							</div>
						</div>
					</li> -->
				
					<!-- /Notifications -->
				
					<!-- Message Notifications -->
			
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" onclick="myFunction()" id="notification-icon">
							<i class="fa fa-comment-o"></i> <span class="badge count" id="notification-count"><?php if($count>0) { echo $count; } ?></span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
						
									
								<ul id="notification-latest"></ul>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="chat">View all Messages</a>
							</div>
						</div>
					</li>
				
					<!-- /Message Notifications -->
     
	
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span><?php echo $ContactPerson; ?></span>
						</a>
						<div class="dropdown-menu">
						<!--	<a class="dropdown-item" href="profile">My Profile</a> -->
							<a class="dropdown-item" href="settings">Settings</a>
							<a class="dropdown-item" href="logout?user=<?php echo $username; ?>">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->


				<!-- Mobile Menu -->
              <!-- Message Notifications -->
                 <div class="dropdown mobile-user-menu">
                 <div style="float: right; padding-right: 50px;">
                 <ul>
                    <li class="nav-item dropdown" style="list-style-type: none;">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" onclick="myFunction()" id="notification-icon">
                            <!-- <i class="fa fa-comment-o" style="color: white"> </i> -->
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" style="color: white"></path></svg><span style="color: white" id="notification-count"><sup><?php if($count>0) { echo $count; } ?></sup></span>
                           
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Messages</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                
                                    
                                <ul id="notification-latest"></ul>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="chat">View all Messages</a>
                            </div>
                        </div>
                    </li>
                   
                    </ul>
                </div>
             </div>
                    <!-- /Message Notifications -->
                    
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
					<!--	<a class="dropdown-item" href="profile">My Profile</a> -->
						<a class="dropdown-item" href="settings">Settings</a>
						<a class="dropdown-item" href="logout?user=<?php echo $username; ?>">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>

