

<html>

	<head>
		<title>Test Page</title>
		
	</head>

	<body>
	  <?php include('files.php') ?>
	

		<script>
		
		var data= <?= $jsonFiles ?>; 

		console.log(data);
		
		var like=data[2];
		
		console.log("I like "+like);

		</script>
		
		Smart PhP Code

	</body>

<html>
