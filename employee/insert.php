 <!DOCTYPE html>
 <html>
 <head>
 	<title>jquery</title>

 	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
 </head>
 <body>
  
  <h1>Enter Product</h1>
  <form method="post" action="insert.php">
  	<input type="text" id="name" name="Productname" placeholder="Productname">

  	<input type="text" id="brand" name="brandname" placeholder="Enter brandname">

  	<input type="type" id="quantity" name="quantity" placeholder="quantity"><br/><br/>

  	<button>save product</button>
  </form>

  <p id="result"></p>

  <script type="text/javascript">
  	$("form").submit(function(e) {
  		// body...
  		e.preventDefault();

  		$.post(
  			'insert.php',{

  				Productname: $("#name").val(),
  				brandname: $("#brand").val(),
  				quantity: $("#quantity").val()

  			},
            function (result) {
            	// body...
            	if (result == "success") {
 
            		$("#result").html("done");


            	} else{

                    $("#result").html("error");
            	}
            }



  			);
  	});
  </script>
 </body>
 </html>