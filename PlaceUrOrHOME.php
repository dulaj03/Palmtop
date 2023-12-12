<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PALMTOP.lk</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="Style.css" rel="stylesheet" type="text/css">

	<script>
        // Function to extract URL parameters
        function getURLParameter(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }

        // Function to show popup message
        function showPopup(message) {
            alert(message);
        }

        // Check for success or error messages in the URL and show the popup accordingly
        document.addEventListener('DOMContentLoaded', function () {
            const successMessage = getURLParameter('success');
            const errorMessage = getURLParameter('error');

            if (successMessage) {
                showPopup(successMessage);
            } else if (errorMessage) {
                showPopup(errorMessage);
            }
        });
    </script>

</head>

<body>
	<div class="container-fluid">
		<?php include './component/navbar.php';?>
		<br>
		<div class="container">

			<h2 class="text-center text-capitalize"><strong>Tell us What Kind of laptop You are searching !&nbsp; &nbsp;
					&nbsp;</strong></h2>
			<br>

			<!--Customer Details-->
			<form id="orderplacing" name="orderplacing" method="post" action="server/placeHome.php">
				<h3><b><u>Customer Details</u></b></h3>

				<label for="fname"><b>First Name* :-</b></label> <input type="text" name="Fname" id="fname" required>
				<label for="sname"><b>Second Name* :-</b></label> <input type="text" name="Sname" id="sname"
					required><br>
				<label for="comname"><b>Purpose(optional) :-</b></label> <br><input type="text" name="Purpose"
					id="comname" required>
				<br>
				<label for="Province"><b>Province* :-</b></label> <br>
				<select name="Province">
					<option value="0">Select here</option>
					<option value="1">Western Province</option>
					<option value="2">Eastern Province</option>
					<option value="3">North Central Province</option>
					<option value="4">Northern Province</option>
					<option value="5">North Western Province</option>
					<option value="6">Sabaragamuwa Province</option>
					<option value="7">Southern Province</option>
					<option value="8">Uva Province</option>
					<option value="9">Central Province</option>
				</select><br>
				<label for="saddress"><b>Street Address* :-</b></label><br> <input type="text" name="StrAdd1"
					id="saddress" placeholder=" House No &  Street name" required>
				<input type="text" name="StrAdd2" id="sapartment" placeholder=" Apartment, suit, etc(optional)"><br>
				<label for="town"><b>Town/City :-</b></label><br> <input type="text" name="Town" id="town"><br>
				<label for="postal"><b>Postal Code/ZIP* :-</b></label><br> <input type="text" name="PosCode" id="postal"
					required><br>
				<label for="phone"><b>Phone* :-</b></label><br> <input type="text" name="Phone" id="phone"
					placeholder=" Ex:- +947xxxxxxxx" required><br>
				<label for="email"><b>E-Mail* :-</b></label> <br><input type="text" name="Email" id="email"
					placeholder=" Ex:- abc@xxxx.com" required><br><br>
				<hr>

				<!--Details About devices-->

				<h3><b><u>Details about searching Laptop</u></b></h3>
				<label for="manufact"><b>Manufacturer* :-</b></label> <br>
				<select name="Manuf">
					<option value="0">Not restricted</option>
					<option value="1">Acer</option>
					<option value="2">Apple</option>
					<option value="3">Asus</option>
					<option value="4">Dell</option>
					<option value="5">HP</option>
					<option value="6">Lenovo</option>
					<option value="7">MSI</option>
					<option value="8">One Notebook</option>
					<option value="9">Vivo</option>
				</select><br><br>
				<label for="priceRange"><b>Select a Price Range* :-</b></label>
				<input type="range" id="priceRange" min="0" max="800000" step="10" value="500" required>
				<output for="priceRange" id="priceOutput" name="Price">0</output>

				<script>
					const priceRange = document.getElementById("priceRange");
					const priceOutput = document.getElementById("priceOutput");

					priceRange.addEventListener("input", function () {
						priceOutput.value = priceRange.value;
					});
				</script><br>
				<label for="Lbrand"><b>Model* :-</b></label> <input type="text" name="Model" id="model" required>
				<label for="Lmodel"><b>Model No* :-</b></label> <input type="text" name="ModelNo" id="Lmodelno"
					required><br>
				<label for="processor"><b>Processor* :-</b></label> <input type="text" name="Processor" id="processor"
					required>
				<label for="gener"><b>Generation* :-</b></label> <input type="text" name="Generation" id="gener"
					required><br>
				<label for="ram"><b>RAM* :-</b></label> <input type="text" name="Ram" id="ram" placeholder=" GB"
					required><br>
				<hr>

				<!--Shipping details-->

				<h3><b><u>Shipping Details</u></b></h3>

				<script>
					function toggleAdditionalFields() {
						var checkbox = document.getElementById("showAdditional");
						var condition = checkbox.checked;
						var additionalFields = document.getElementById("additionalFields");

						if (condition) {
							additionalFields.style.display = "block";
						} else {
							additionalFields.style.display = "none";
						}
					}
				</script>
				<label for="showAdditional">Ship to a different address?</label>
				<input type="checkbox" id="showAdditional" name="showAdditional" onclick="toggleAdditionalFields()">

				<div id="additionalFields" style="display: none;">
					<label for="additionalInfo"><b>First Name* :-</b></label>
					<input type="text" id="sfname" name="sfname">
					<label for="additionalInfo"><b>Second Name* :-</b></label>
					<input type="text" id="ssname" name="ssname"><br>
					<label for="additionalinfo"><b>Province* :-</b></label> <br>
					<select name="sprovince">
						<option value="0">Select here</option>
						<option value="1">Western Province</option>
						<option value="2">Eastern Province</option>
						<option value="3">North Central Province</option>
						<option value="4">Northern Province</option>
						<option value="5">North Western Province</option>
						<option value="6">Sabaragamuwa Province</option>
						<option value="7">Southern Province</option>
						<option value="8">Uva Province</option>
						<option value="9">Central Province</option>
					</select><br>
					<label for="saddress"><b>Street Address* :-</b></label><br> <input type="text" name="ssaddress"
						id="ssaddress" placeholder=" House No & Street name">
					<input type="text" name="ssapartment" id="ssapartment"
						placeholder=" Apartment, suit, etc(optional)"><br>
					<label for="town"><b>Town/City :-</b></label> <br><input type="text" name="stown"
						id="stown"><br>
					<label for="postal"><b>Postal Code/ZIP* :-</b></label><br> <input type="text" name="spostal"
						id="spostal"><br>
					<label for="phone"><b>Phone* :-</b></label> <br><input type="text" name="sphone" id="sphone"
						placeholder=" Ex:- +947xxxxxxxx"><br>
					<label for="email"><b>E-Mail* :-</b></label> <br><input type="text" name="semail" id="semail"
						placeholder=" Ex:- abc@xxxx.com"><br>
				</div><br>
				<label for="other"><b>Other Information(optional) :-</b></label> <br><textarea name="info" rows="4"
					cols="50" placeholder="Type Here"></textarea><br><br>
				<input type="submit" id="submit" name="submit" value="Place Order">
				<input type="reset" id="reset" name="reset" value="Reset">

			</form>

			<br>
		</div>



		<br> <br>
		<div class="card">
			<footer>
				<center><b>We are Here! 24/7 Customer Support. <br>
						<a href="hr.com">+947312345678</a> / <a href="hr.com">+947912345678</a> <br>
						<a href="laptopsforsale123@gmail.com">PALMTOPlk@gmail.com</a> <br>
						<a href="Youtube.html"><img src="images/whtsap.png" width="45" height="43" alt=""></a>
						<a href="Youtube.html"><img src="images/insta.png" width="40" height="40" alt=""></a>
						<a href="Youtube.html"><img src="images/Fb1.png" width="38" height="35" alt=""></a></b></center>
			</footer> <br>
			<p>
				<center><b><a href="LAP.html">Home</a> | <a href="about.html">About</a> | <a href="promo.html">Promo</a>
						| <a href="contact.html">Contact</a> | <a href="location.html">Location</a> | <a
							href="brandsAndCateg.html">Brands & Categories</a></b></center>
			</p>
			<div class="row">
				<div class="col-lg-5"><b>&nbsp;<img src="images/newlogo.jpg" alt="" width="3365" height="1450"
							class="img-fluid" /></b></div>
				<div class="col-lg-6">&nbsp;<b>&nbsp;<br>
						&nbsp; Laptops for sale.<br><br>
						&nbsp; #21/A, Weliwatta road, Colombo 09.<br><br>
						&nbsp; Copyright © 2023 PALMTOP.lk | All rights reserved.</b></div>

				<div class="col-log-7"><b>
						<center>
							<br>
							<p><u>Top Brands</u></p>
							<a href="brandsAndCateg.html">Apple</a><br>
							<a href="brandsAndCateg.html">Asus</a><br>
							<a href="brandsAndCateg.html">Dell</a><br>
							<a href="brandsAndCateg.html">HP</a><br>
							<a href="brandsAndCateg.html">MSI</a><br>
							<a href="brandsAndCateg.html">Lenovo</a>
						</center>
					</b> </div>
				<a href="orderplace.php"></a><!-- body code goes here -->


				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="js/jquery-3.4.1.min.js"></script>

				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="js/popper.min.js"></script>
				<script src="js/bootstrap-4.4.1.js"></script>
				<script>
					function checker() {
						var result = confirm('Are You Sure?');
						if (result == false) {
							event.preventDefault();
						}
					}
				</script>
			</div>
		</div>
	</div>
</body>

</html>