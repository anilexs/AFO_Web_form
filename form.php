<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
	<div class="container">
		<div class="myform">
			<div class="front">
				<i class="material-icons">
				person
				</i>
				<input type="text" class="uname" placeholder="USERNAME" value="text">
				<button class="forward" id="btn1">
					<i class="fa-solid fa-arrow-right"></i>
				</button>
			</div>
			<div class="right">
				<i class="material-icons">
				email
				</i>
				<input type="email" class="email" placeholder="EMAIL ID" value="text@text.text">
				<button class="forward" id="btn2">
					<i class="fa-solid fa-arrow-right"></i>
				</button>
			</div>
			<div class="back">
				<i class="material-icons">
				lock
				</i>
				<input type="password" class="password" placeholder="PASSWORD" value="mdppdmmdp">
				<button class="forward" id="btn3">
					<i class="fa-solid fa-arrow-right"></i>
				</button>
			</div>
    			<div class="left">
    				<i class="material-icons">
    			favorite
    			</i>
    			<span>YOU ARE WELCOME</span>
    			<i class="material-icons">
    			favorite
    			</i></div>
    		</div>
    		<h1 class="error"></h1>
    	</div>
    </div>
    <script src="form.js"></script>
</body>
</html>