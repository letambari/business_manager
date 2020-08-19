<!DOCTYPE html>
<html>
	<head>
		<title>Demo change url witthout load website</title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	</head>
	<style>
		.menu { display: inline-block; width: 100%; clear: both; } 
		ul li {
			list-style: none;
			float: left;
			margin-right: 30px;
			padding: 5px 15px;
			border: 1px solid #ccc;
			border-radius: 3px;
			cursor: pointer;
		}
		ul li:hover,
		ul li.active		{
			background: aquamarine;
		}
		#main-content { 
			border: 1px dotted red; 
			padding: 5px 10px;
		}
		
	</style>
	<body>
		<div class="menu">
			<ul>
				<li onClick="loadHomepage()">Home</li>
				<li onClick="loadProducts()">Products</li>
			</ul>
		</div>
		<div id="main-content">[Text will update here!]</div>
		<div class="content">
			<h3>This is title article</h3>
			<div class="text">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
				when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
				It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
				It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
				desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
			</div>
		</div>
		<script>
			// DEFAULT CONTENT
			var DOMAIN_NAME = 'http://localhost/demo_change_url/change-url.html';
			
			var html_home = '<h1>HOME PAGE</h1>';
			html_home += '<h3>Add content home page here!</h3>';
			html_home += '<h4>Any question or Task, Please Contact with me: luyenthinhanh.contact@gmail.com!</h4>';
			
			var html_product = '<h1>PRODUCTS PAGE</h1>';
			html_product += '<h3>Add content Products page here!</h3>';
			html_product += '<h4>Any question or Task, Please Contact with me: luyenthinhanh.contact@gmail.com!</h4>';
			
			function loadHomepage() {
				history.pushState({},"",DOMAIN_NAME + "/home");
				document.getElementById('main-content').innerHTML = html_home;
			}
			function loadProducts() {
				history.pushState({},"",DOMAIN_NAME + "/products");
				document.getElementById('main-content').innerHTML = html_product;
			}
		</script>
	</body>
</html>
