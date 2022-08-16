<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Jugaad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
	</head>
	<body class="subpage">

		

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Register Here!</h2>
						<p>Kripya apni jaankari yaha bhare</p>
						<p><?php echo $msg."<br>";?></p>
					</header>

				
							<!-- Form -->
								

								<?php echo form_open_multipart("users/register");?>
								<center>	<div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Name" required /><br>
											<input type="email" name="email" id="email" value="" placeholder="Email"  required /><br>
											<input type="text" name="mob" id="name" value="" placeholder="Mobile" required /><br>
											<input type="password" name="pass" id="name" value="" placeholder="Password" required /><br>
										</div>
										
										
										
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Register" name="submit"/></li>
												<p>By clicking Register, you agree to our <?php echo anchor("users/term","Terms and Conditions");?></p>
</p>
												</ul>
										</div>
									</div>
								</form>

								<hr />

								
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>