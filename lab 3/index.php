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
		<form action="<?php $_PHP_SELF ?>" method="POST">
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
							<label>Group No</label>
						</td>
						<td class="form-input">
							<input id="g_no" type="number" name="gNo">
						</td>
					</tr>
					<tr>
						<td class="form-label">
							<label>
								Class Details
							</label>
						</td>
						<td class="form-input">
							<textarea rows="5" cols="50" name="details" id="details"></textarea>
						</td>
					</tr>
					<tr>
						<td class="form-label">
							<label for="">Gender</label>
						</td>
						<td class="form-input">
							<input checked type="radio" id="male" name="gender" value="male">
							<label for="male">Male</label><br>
							<input type="radio" id="female" name="gender" value="female">
							<label for="female">Female</label><br>
						</td>
					</tr>
					<tr>
						<td class="form-label">
							<label>Courses</label>
						</td>
						<td class="form-input">
							<select name="courses[]" style="width: 150px; text-align: center; padding: 5px;" multiple>
								<option disabled>Select courses</option>
								<option <?php echo  (isset($_POST["courses"]) && in_array('php',$_POST["courses"] ) ? 'selected': "") ?> id="php" value="php" >PHP</option>
								<option <?php echo  (isset($_POST["courses"]) && in_array('html',$_POST["courses"] ) ? 'selected': "") ?> id="html" value="html">HTML</option>
								<option <?php echo  (isset($_POST["courses"]) && in_array('css',$_POST["courses"] ) ? 'selected': "") ?> id="css" value="css">CSS</option>
								<option <?php echo  (isset($_POST["courses"]) && in_array('js',$_POST["courses"] ) ? 'selected': "") ?> id="js" value="js">JavaScript</option>
							</select>
						</td>
					</tr>

					<tr>
						<td></td>
						<td><input type="checkbox" name="ch-box"> <span style="color: #2c632d">I accept the </span><a href="#" target="">Terms of Use</a></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Continue >>" name="submit"> <input type="reset" name="reset"></td>
					</tr>

				</table>
			</div>

		</form>
	</div>
	<?php
	// echo print_r($_POST);
	$nameFormat = "/^[a-zA-Z]+$/i";
	echo '<br>';
	if (isset($_POST["submit"])) {
		if (!empty($_POST["name"])) {
			if (!preg_match($nameFormat, $_POST["name"])) {
				echo '<script>
			
			let name = document.getElementById("ifNameEmpty");
			name.innerText = "* Only Letters ALLOWED!";
			
			let email = document.getElementById("email");
			let g_no = document.getElementById("g_no");
			let details = document.getElementsByName("details");
			let gender = document.getElementById("' . $_POST["gender"] . '");
			

			gender.setAttribute("checked", "");			
			g_no.value = ' . $_POST["gNo"] . ';
			email.value = "' . $_POST["email"] . '";
			console.log("' . $_POST["details"] . '");
			console.log(details[0]);
			details[0].value = "' . $_POST["details"] . '";


		

		</script>';
			} else {
				echo '<div style=" font-weight: bold; font-size:20px">';
				echo '<br> Your name: ' . $_POST["name"];
				echo '<br> Your Email: ' . $_POST["email"];
				echo !empty($_POST["gNo"]) ? '<br> Group No:' . $_POST["gNo"] : '';
				echo !empty($_POST["details"]) ? '<br> Class details: ' . $_POST["details"] : '';
				echo !empty($_POST["gender"]) ? '<br> Gender: ' . $_POST["gender"] : '';
				echo '<br>';
				if (!empty($_POST['courses'])) {
					echo 'Your courses are: ';
					foreach ($_POST["courses"] as $key => $value) {
						echo $value . ', ';
					}
				}
				echo '</div>';
			}
		};

		if (empty($_POST["name"])) {
			echo '<script>
			
			let name = document.getElementById("ifNameEmpty");
			name.innerText = "* This field is required";
			
			let email = document.getElementById("email");
			let g_no = document.getElementById("g_no");
			let details = document.getElementsByName("details");
			let gender = document.getElementById("' . $_POST["gender"] . '");
			

			gender.setAttribute("checked", "");			
			g_no.value = ' . $_POST["gNo"] . ';
			email.value = "' . $_POST["email"] . '";
			console.log("' . $_POST["details"] . '");
			console.log(details[0]);
			details[0].value = "' . $_POST["details"] . '";

		</script>';
		}
	}
	?>

</body>

</html>

<body>
</body>

</html>