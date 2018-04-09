<? include ("includes/header.php") ?>
<body>
	<div class="navbar-fixed">
		<nav class="grey darken-4" role="navigation">
			<div class="nav-wrapper container-fluid">
				<ul class="left">
					<li><a class="light-blue-text text-lighten-1" href="index.php"><i class="material-icons left">smartphone</i><?= $phone ?></a></li>
				</ul>
				<ul class="right hide-on-med-and-down">
					<li><a class="light-blue-text text-lighten-1" href="index.php"><i class="material-icons left">email</i><?= $email ?></a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="#">Navbar Link</a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>
	<div class="navbar-fixed">
		<nav class="white" role="navigation">
			<div class="nav-wrapper container-fluid">
				<a id="logo-container" href="index.php" class="brand-logo light-blue-text text-lighten-1"><?= $companyname ?></a>
				<ul class="right hide-on-med-and-down">
					<li><a class="light-blue-text text-lighten-1" href="index.php">ABOUT</a></li>
					<li><a class="light-blue-text text-lighten-1" href="index.php">SERVICES</a></li>
					<li><a class="light-blue-text text-lighten-1" href="index.php">PROJECTS</a></li>
					<li><a class="light-blue-text text-lighten-1" href="index.php">PLANS</a></li>
					<li><a class="light-blue-text text-lighten-1" href="index.php">CONTACT</a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="#">Navbar Link</a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>

	<div class="container">
		<h2 class="center-align teal-text">Refund Policy</h2>
		<p class="justify-text">Lyncy  Consultant provides several different services that customers can buy. We do our best to make sure that our customers are satisfied with the service provided, although still if they are not then the following is our refund policy, please read it carefully before purchasing our service.</p>

		<h5>Refund Policy :</h5>
		<p>Refund can be provided only in the following process:</p>

		<p>Refund Procedure:</p>
		<ul class="browser-default">
			<li>The refund should/must be requested within ninety (90) days from the date of purchase; sent via email to info@lyncyconsultant.com. It should contain order reference number along with one reason why the refund has been requested.</li>
			<li>If you are not satisfied with the services after ninety days you are eligible for a refund of 50% of the amount till 6 months.</li>
			<li>Once refund is raised, you should expect an email from info@lyncyconsultant.com.</li>
			<li>Once refund is approved, it might take us up to three (3) business days to process it. You will get the money returned by the same method used for purchase.</li>
			<li>Once everything is done, it can take up to 7 Business days for the money to be credited back into your account, depending on your bank/credit card processor.</li>
		</ul>
		<p>Note :</p>
		<ul class="browser-default">
			<li>Refund for Accounting Consultation fee or any other consultation fee will not be processed as the client has received the consultation service already.</li>
			<li>Visiting charges are non-refundable.</li>
		</ul>
	</div>

	<? include ("includes/footer.php") ?>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

	</body>
</html>
