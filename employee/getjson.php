<html>
<head><title>JSON jQuery AJAX</title></head>

<body>
<script type="text/javascript">
	const xhr = new XMLHttpRequest();

	xhr.onload = function() {
		// body...
		if (this.status === 200) {
			try {
				const resObj = JSON.parse(this.responseText);
				//console.log(resObj); 
				alert(resObj.status[]);
			} catch(e) {

				console.warn('e no work');
			}
		} else{
			console.warn('did not recieve')
		}
	};

	xhr.open('get', 'employee_data.json');
	xhr.send();
</script>
</body>
</html>