<html>

<head>
	<title>PHP - Lab3</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Regester</title>
	<link rel="stylesheet" href="./style.css" />
</head>

<body>


	<div class="form-container">
		<form action="./addProc.php" method="POST">
			<div class="form-div">
				<div class="form-title">
					<h3>CMS - Class registration</h3>
				</div>
				<div class="form-p">
					<p>Field marked with <sup>*</sup> are compulsory fields</p>
				</div>
				<table>
					<tr>
						<td class="form-label"><sup>*</sup><label>Your Name</label></td>
						<td class="form-input"><input type="text" name="name" style="width: 280px;" /> <span style="color: red;" id="ifNameEmpty"></span></td>
					</tr>
					<tr>
						<td class="form-label"><sup>*</sup><label>E-Mail</label></td>
						<td class="form-input"><input id="email" required type="email" name="email" style="width: 450px;" /></td>
					</tr>

				
					<tr>
						<td class="form-label">
							<label for="">Gender</label>
						</td>
						<td class="form-input">
							<input type="radio" id="male" name="gender" value="male" checked>
							<label for="male">Male</label><br>
							<input type="radio" id="female" name="gender" value="female">
							<label for="female">Female</label><br>
						</td>
					</tr>
					

					<tr>
						<td></td>
						<td><input type="checkbox" name="ch_box"> <span style="color: #2c632d">I accept the </span><a href="#" target="">Terms of Use</a></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Continue >>" name="submit"> <input type="reset" name="reset"></td>
					</tr>

				</table>
			</div>

		</form>
	</div>

</body>

</html>

<body>
</body>

</html>