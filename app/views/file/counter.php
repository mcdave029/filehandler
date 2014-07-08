<html>
	<head>
		<title></title>
		<meta http-equiv="refresh" content="1"/>
	</head>
	<body>
		<div>
			<dt>Count of Files Being Saved in the Database</dt>
			<dl>Count:<?php 
			$files = Document::all();
				echo ($files->count());
			?></dl>
		</div>
	</body>
</html>