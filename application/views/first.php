<!DOCTYPE HTML>

<html>
	<head>
		<title>Jugaad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			

		<!-- Banner -->
			<section id="banner">
				<h1>Welcome to Jugaad</h1>
				
				<p>A easy way to sell or buy second or third hand  books and notes</p>
				<h1></h1>
				<header class="align-center">
						
						<form action="<?php echo site_url().'users/listing';?>" method="get">
						<center><div class="6u 12u$(xsmall)">
						<input type="text" name="search" id="name" value="" placeholder="Kya chaiye? Search here!" required /><br></div>
						
						<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Search" name="submit"/></li>
												
												</ul>
										</div>
						
					</header>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-3">
						<article>
							<header>
								<h3>Sell your old Quantum/Books</h3>
							</header>
							<p>Semster clear ho gaya, par quantum/books lene wala koi nahi? Jugaad yaha milega.</p>
							
						</article>
						<article>
							<header>
								<h3>Buy 2<sup>nd</sup> hand Quantums</h3>
							</header>
							<p>Stationary wala Jyada mahenga laga raha books jo sirf 6 mahene k liye chaiye? Jugaad kaha milega? Samjh jao.</p>
							
						</article>
						<article>
							<header>
								<h3>Want to buy/sell handwritten notes?</h3>
							</header>
							<p>poore semister , notes banaye, likin ab kya fek de? Samjh toh aap jaye hi honge.</p>
							
						</article>
					</div>
				</div>
			</section>

		
		
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