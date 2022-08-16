<!DOCTYPE HTML>

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
						<h2>Update here!</h2>
						
						<p>Apne item ki jaankar de kripya</p>
					</header>

				
							<!-- Form -->
								

								<?php echo form_open_multipart("users/update_item");?>
								<center>	<div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="book" id="email" value="<?php echo $ele[0]['book'];?>" placeholder="Name of book" required /><br>
											<input type="text" name="author" id="email" value="<?php echo $ele[0]['author'];?>" placeholder="Author" required /><br>
											<input type="text" name="price" id="email" value="<?php echo $ele[0]['price'];?>" placeholder="Expected Price( Dene wala daam batana)" required /><br>
											<img src="<?php echo base_url();?>assets/images/<?php echo $ele[0]['img'];?>" width="100"><br>
											
											<input type="file" name="img" id="name" ><br>
										</div>
										<div class="6u 12u$(xsmall)">
											<textarea name="des" id="message" placeholder="Discription..." rows="3" cols="1"><?php echo $ele[0]['des'];?></textarea>
										</div>
										
										<input type="hidden" name="id" value="<?php echo $ele[0]['id'];?>">
										<input type="hidden" name="file" value="<?php echo $ele[0]['img'];?>">
										
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Update" name="submit"/></li>
												
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
			<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/skel.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/util.js"></script>
			<script src="<?php echo base_url();?>assets/js/main.js"></script>

	</body>
</html>