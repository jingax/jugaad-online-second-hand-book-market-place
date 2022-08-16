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
					
<?php $id = $this->uri->segment(3);
$ele=$this->usermod->see($id);
$sell=$this->usermod->see_ss($ele[0]['seller']);
?>
						
						

					<div class="flex flex-2">
										<article>
							<center><div ><center><h3><?php echo $ele[0]['book'];?></h3>
								<img height="200" src="<?php echo base_url();?>assets/images/<?php echo $ele[0]['img'];?>" alt="Pic 01" >
							
							</div>
							
								
							
							
							<?php echo $ele[0]['author'];?><br>
							<p>
							<?php if ($ele[0]['ss']){?>
							<b>Contact Seller</b><br>Mob: <?php echo $sell[0]['mob'];?><br>Email: <?php echo $sell[0]['email'];?> </p>
							<?php } else
							{?>
							<p><b>Out of stock, this item will be removed shortly. We are sorry for inconvenience.</b></p><?php }?>
							<b><?php echo "INR ".$ele[0]['price'];?></b><br>
							<?php echo $ele[0]['des'];?>
							
						<center></article>
						
						
					</div>
				
							<!-- Form -->
								

								
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