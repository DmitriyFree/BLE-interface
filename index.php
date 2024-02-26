<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="google" value="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<script type="text/javascript" src="jquery.js"></script>
	<script src="script.js?v=<?=time()?>"></script> 
    <title>June BLE Web Interface</title>
	<link rel="stylesheet" href="style.css?v=<?=time()?>"/>
</head>
<body>
	<h1>June BLE Web Interface</h1>
	<div class="actions options">
		<div class="label">Discover BLE devices</div>
		<input id="connect" type="button" value="Find and connect"/>
	</div>
	<div class="credentials options">
		<div class="label">WiFi credentials</div>
		<div>
			<input id="ssid" type="text" value="" placeholder="ssid"/>
			<input id="password" type="password" value="" placeholder="password"/>
		</div>
		<input id="send_credentials" type="button" value="Send"/>
		
	</div>
	<div class="text options">
		<div class="label">Text string</div>
		<div>
			<textarea id="text" type="text" placeholder="text"></textarea>
			<div>
				<input id="send_text" type="button" value="Send"/>
			</div>
			<?/*<div>
				<input id="listen" type="button" value="listen"/>
			</div>*/?>
		</div>
		
		
	</div>
	<div class="options">
		<div class="status"></div>
	</div>
</body>
</html>