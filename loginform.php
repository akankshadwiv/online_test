<html>
	<head>
		<title>
			test title
		</title>
		<style>
		.container{float:left; border:1px solid black;}
		.container .content{float:left; border:1px solid red;}
		</style>
	</head>

	<body>
	<form method="post" action="/oltest/loginaction.php">
		<div class="container">
			<div class="content">
				<input type="text" name="username">
			</div>
			<div class="content">
				<input type="password" name="password">
			</div>
			<div class="content">
				<input type="submit">
			</div>
		</div>
	</form>	
		
	</body>
</html>