
 <html>
 <head>
<!-- Part 1 For ease i'm just using a JQuery version hosted by JQuery- you can download any version and link to it locally -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- <script>
var cacheData;
var data = $('#bottom-bar').html();
var auto_refresh = setInterval(
function ()
{
    $.ajax({
        url: 'test.php',
        type: 'POST',
        data: data,
        dataType: 'html',
        success: function(data) {
            if (data !== cacheData){
                //data has changed (or it's the first call), save new cache data and update div
                cacheData = data;
                $('#bottom-bar').html(data);
            }         
        }
    })
}, 300); // check every 30000 milliseconds
</script> -->



<!-- Part 2 Only using Javascript-->
           <script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('test').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);
	</script>
</head>
<body>

<div id="bottom-bar">test
</div>

            <div id="test">
                Testing
            </div>
            <div id="staticBlock">
                This is a static block
            </div>
</body>
</html>
