<?php

	include("connection.php");
	include("submit.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

<header>
	<h1>My Mug Tracker Website</h1>

	<nav>
		<ul>
			<li><a href="../index.html">Home Page</a></li>
			<li><a href="../login.html">Login</a></li>
			<li><a href="register.php">Register</a></li>
		</ul>
	</nav>
</header>


	<form method="post" action="">
		<fieldset>
		<legend>Registration Form</legend>
			<table width="400" border="0" cellpadding="10" cellspacing="10">
				<tr>
					<td colspan="2" align="center" class="error"><?php echo $msg;?></td>
				</tr>
				<tr>
					<td style="font-weight: bold">
							<div align="right"><label for="name">Username</label></div>
					</td>
					<td>
							<input name="name" type="text" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td style="font-weight: bold">
							<div align="right">
									<label for="email">Email</label>
							</div>
					</td>
					<td>
							<input name="email" type="email" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold">
							<div align="right">
								<label for="password">Password</label>
							</div>
					</td>
					<td>
							<input name="password" type="password" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td height="23"></td>
					<td>
						<div align="right">
				  		<input type="submit" name="submit" value="Register!" />
						</div>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
