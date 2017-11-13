
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="True">
	<meta http-equiv="cleartype" content="on">
	<meta name="theme-color" content="#009ee3">
	<link rel="stylesheet" type="text/css" href="media/css/login.css">
	<link rel="stylesheet" type="text/css" href="media/css/font-awesome.css">

	<script src="media/js/jquery-3.2.1.min.js"></script>
	<script src="media/js/bootstrap-notify.min.js"></script>
	<script src="media/js/notify.js"></script>
	<script src="media/js/login.js"></script>

	<title>Login | Multi911 CA</title>
</head>
<body>

	<div class="login">
		<h1>Multi911 CA</h1>
	    <form id="login-form" method="post">
	    	<input type="text" name="usuario" id="usuario" placeholder="Username" onkeypress="return blokSpace(event,this)" required/>
	        <input type="password" name="password" placeholder="Password" onkeypress="return blokSpace(event,this)" required/>
	        <button type="button" id="ingresar" class="btn btn-primary btn-block btn-large">Ingresar</button>
	    </form>
	</div>

</body>
</html>
